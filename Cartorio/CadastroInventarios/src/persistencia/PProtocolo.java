/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package persistencia;

import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.util.ArrayList;
import modelo.Protocolo;
import modelo.Tipo;

/**
 *
 * @author Samuel
 */
public class PProtocolo {

    private static ArrayList<Protocolo> banco = new ArrayList<Protocolo>();
    private Numeracao numeracao = new Numeracao();
    private static int ultimoID;
    private static int ultimoCodINV;
    private static int ultimoCodSOB;

    public PProtocolo() {
        carregaTodos();
    }

    private String retornaNomeArq(Protocolo p){
        return "data/" + p.getId() + ".ser";
    }
    
    private File[] listaArquivos(String diretorio){
        File arquivo = new File(diretorio);
        File[] files = arquivo.listFiles();
        return files;
    }
    
    private boolean serializa(Protocolo p) {
        if (p == null) {
            return false;
        }
        
        System.out.println("Salvando em "+retornaNomeArq(p));
        try {
            FileOutputStream fout = new FileOutputStream(retornaNomeArq(p));
            ObjectOutputStream oos = new ObjectOutputStream(fout);
            oos.writeObject(p);

            oos.close();

            return true;
        } catch (Exception ex) {
            System.err.println("ERRO!");
            return false;
        }
    }

    private Protocolo deserializa(String nomeArq) {
        Protocolo p;
        System.out.println(nomeArq);
        try {
            FileInputStream fin = new FileInputStream(nomeArq);
            ObjectInputStream ois = new ObjectInputStream(fin);

            p = (Protocolo) ois.readObject();
            ois.close();

            return p;
        } catch (Exception ex) {
            System.err.println("ERRO!");
            return null;
        }
    }

    public boolean novoProtocolo(Protocolo protocolo) {
        System.out.println("COD ADD: " + protocolo.getCod());
        System.out.println("TOTAL: " + banco.size());
        protocolo.setId(ultimoID+1);
        if(this.serializa(protocolo)){
            numeracao.insere(protocolo.getCod(), protocolo.getTipo());
            banco.add(protocolo);
            return true;
        }
        return false;
    }
    
    private void carregaTodos(){
        Protocolo p;
        File[] arquivos = listaArquivos("data");
        banco = new ArrayList<Protocolo>();
        this.ultimoID = 0;

        for (int i = 0; i < arquivos.length; i++) {
            banco.add(deserializa("data/"+arquivos[i].getName()));
            p = banco.get(i);
            this.ultimoID = p.getId();
        }
    }

    public ArrayList<Protocolo> pesquisa(Tipo tipo, String cod, String data, String inventariado, String advogado, String inventariante, String cpfInventariado, String ordemServico) {
        ArrayList<Protocolo> retorno = new ArrayList<Protocolo>();
        Protocolo p;
        
        for (int i = 0; i < banco.size(); i++) {
            p = banco.get(i);
            if (tipo == p.getTipo()
                    && p.getCod().toUpperCase().contains(cod.toUpperCase()) 
                    && p.getData().toUpperCase().contains(data.toUpperCase())
                    && p.getInventariado().toUpperCase().contains(inventariado.toUpperCase())
                    && p.getAdvogado().toUpperCase().contains(advogado.toUpperCase())
                    && p.getInventariante().toUpperCase().contains(inventariante.toUpperCase())
                    && p.getCpfInventariado().toUpperCase().contains(cpfInventariado.toUpperCase())
                    && p.getOrdemServico().toUpperCase().contains(ordemServico.toUpperCase())) {
                retorno.add(banco.get(i));
            }
            
            
        }
        
        return retorno;
    }

    public ArrayList<Protocolo> selecionaTodos() {
        return banco;
    }

    public boolean excluir(Protocolo p) {
        File arq = new File(retornaNomeArq(p));
        if(arq.delete()){
            banco.remove(pesquisaPosicao(p.getId()));
            return true;
        }
        return false;
    }

    /*public boolean atualiza(int id, String data, String inventariado, String advogado, boolean paralizado, boolean certidao, boolean peticao, boolean escritura, boolean recDocumentos, boolean enviaAF, boolean pgtDAE, boolean certQuitacao, boolean certNegativa, boolean textoPronto, boolean assinaturas, boolean pronto) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }*/
    
    public int pesquisaPosicao(int id){
        for (int i = 0; i < banco.size(); i++) {
            if (banco.get(i).getId() == id) {
                return i;
            }
        }
        return -1;
    }
    
    public boolean atualiza(Protocolo protocolo){
        if(this.serializa(protocolo)){
            banco.set(pesquisaPosicao(protocolo.getId()), protocolo);
            return true;
        }
        return false;
    }
    
    
    public static void main(String[] args) {
        PProtocolo pProtocolo = new PProtocolo();
        /*File[] a = pProtocolo.listaArquivos("date");
        
        for (int i = 0; i < a.length; i++) {
            System.out.println(a[i].getName());
        }*/
    }

    public void salvar() {

        for (int i = 0; i < banco.size(); i++) {
            this.serializa(banco.get(i));
        }
        
    }
}
