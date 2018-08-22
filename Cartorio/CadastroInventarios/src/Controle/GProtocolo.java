/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controle;

import java.util.ArrayList;
import modelo.Protocolo;
import modelo.Tipo;
import persistencia.PProtocolo;

/**
 *
 * @author Samuel
 */
public class GProtocolo {
    private PProtocolo pProtocolo;

    public GProtocolo() {
        this.pProtocolo = new PProtocolo();
    }
    
    
    
    public boolean novoProtocolo(Protocolo protocolo){
        return pProtocolo.novoProtocolo(protocolo);
    }
    
    public ArrayList<Protocolo> pesquisa(Tipo tipo, String cod, String data, String inventariado, String advogado, String inventariante, String cpfInventariado, String ordemServico){
        return pProtocolo.pesquisa(tipo, cod, data, inventariado, advogado, inventariante, cpfInventariado, ordemServico);
    }

    public ArrayList<Protocolo> selecionaTodosInventarios() {
        return pProtocolo.selecionaTodos();
    }

    public boolean excluir(Protocolo p) {
        return pProtocolo.excluir(p);
    }
    
    public boolean atualiza(Protocolo protocolo){
        /*return pProtocolo.atualiza(protocolo.getId(), protocolo.getData(), protocolo.getInventariado(), protocolo.getAdvogado(), protocolo.isParalizado(),
                protocolo.isCertidao(), protocolo.isPeticao(), protocolo.isEscritura(),
                protocolo.isRecDocumentos(), protocolo.isEnviaAF(), protocolo.isPgtDAE(), protocolo.isCertQuitacao(), protocolo.isCertNegativa(), protocolo.isTextoPronto(), protocolo.isAssinaturas(), protocolo.isPronto());*/
        return pProtocolo.atualiza(protocolo);
    }

    public String calculaCod() {
        return "001/2018";
    }

    public void salvar() {
        pProtocolo.salvar();
    }
    
    
}
