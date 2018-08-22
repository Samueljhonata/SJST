/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package persistencia;

import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import modelo.Tipo;
import utilitarios.Arquivo;

/**
 *
 * @author Samuel
 */
public class Numeracao {
    
    public int pegaUltimo(String data, Tipo tipo){
        int ano;
        ArrayList<String> leitura, escrita;
        Arquivo arq = new Arquivo();
        
        try {
            ano = Integer.parseInt(data.split("/")[2]);
            if (ano < 2010 || ano > 2100) {
                return -1;
            }
        } catch (Exception e) {
            return -1;
        }
        
        try {
            leitura = arq.lerArquivo("config/"+tipo.getCod()+ano+".txt");
            return Integer.parseInt(leitura.get(0));
        } catch (Exception ex) {
            escrita = new ArrayList<>();
            escrita.add("0");
            arq.escreveNoArquivo("config/"+tipo.getCod()+ano+".txt", escrita, true);
            return 0;
        }
        
    }
    
    
    
    public String calculaProx(String data, Tipo tipo){
        
        int ultimo = this.pegaUltimo(data, tipo) + 1;
        String ano, cod;
        
        try {
            ano = data.split("/")[2];
        } catch (Exception e) {
            return null;
        }
        
        if (ultimo < 10) {
            cod = "00" + ultimo;
        }else if (ultimo < 100) {
            cod = "0" + ultimo;
        }else{
            cod = ultimo+"";
        }
        
        return cod + "/" + ano;
    }
    
    public boolean insere(String codigo, Tipo tipo){
        int ano;
        int cod;
        ArrayList<String> escrita;
        Arquivo arq = new Arquivo();
        
        try {
            cod = Integer.parseInt(codigo.split("/")[0]);
            ano = Integer.parseInt(codigo.split("/")[1]);
            if (ano < 2000 || ano > 2100) {
                return false;
            }
        } catch (Exception e) {
            return false;
        }
        
        try {
            escrita = new ArrayList<>();
            escrita.add(cod+"");
            arq.escreveNoArquivo("config/"+tipo.getCod()+ano+".txt", escrita, true);
            return true;
        } catch (Exception ex) {
            return false;
        }
        
    }
    
    public static void main(String[] args) {
        Numeracao n = new Numeracao();
        System.out.println(n.pegaUltimo("23/07/2018",Tipo.INVENTARIO));
        n.insere("010/2018",Tipo.INVENTARIO);
    }
    
}
