/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modelo;

import java.io.Serializable;

/**
 *
 * @author Samuel
 */
public class Protocolo implements Serializable{
    private int id;
    private String cod;
    private Tipo tipo;
    private String data;
   
    private boolean certidao;
    private boolean peticao;
    private boolean escritura;
    
    private String inventariado;
    private String advogado;
    
    private double valor;
    private boolean paralizado;

    private boolean recDocumentos;
    private boolean enviaAF;
    private boolean pgtDAE;
    private boolean certQuitacao;
    private boolean certNegativa;
    private boolean textoPronto;
    private boolean assinaturas;
    private boolean pronto;
    
    private String dataEscritura;
    private String inventariante;
    private String ordemServico;
    private String cpfInventariado;

    public Protocolo(int id, String cod, Tipo tipo, String data, boolean certidao, boolean peticao, boolean escritura, String inventariado, String advogado, double valor, boolean paralizado, boolean recDocumentos, boolean enviaAF, boolean pgtDAE, boolean certQuitacao, boolean certNegativa, boolean textoPronto, boolean assinaturas, boolean pronto, String dataEscritura, String inventariante, String ordemServico, String cpfInventariado) {
        this.id = id;
        this.cod = cod;
        this.tipo = tipo;
        this.data = data;
        this.certidao = certidao;
        this.peticao = peticao;
        this.escritura = escritura;
        this.inventariado = inventariado;
        this.advogado = advogado;
        this.valor = valor;
        this.paralizado = paralizado;
        this.recDocumentos = recDocumentos;
        this.enviaAF = enviaAF;
        this.pgtDAE = pgtDAE;
        this.certQuitacao = certQuitacao;
        this.certNegativa = certNegativa;
        this.textoPronto = textoPronto;
        this.assinaturas = assinaturas;
        this.pronto = pronto;
        this.dataEscritura = dataEscritura;
        this.inventariante = inventariante;
        this.ordemServico = ordemServico;
        this.cpfInventariado = cpfInventariado;
    }
    

    
    
    /*public Protocolo(int id, String cod, String data, Tipo tipo, boolean certidao, boolean peticao, boolean escritura, String inventariado, String advogado, double valor, boolean paralizado, String dataEscritura, String inventariante, String ordemServico, String cpfInventariado) {
        this.id = id;
        this.cod = cod;
        this.data = data;
        this.tipo = tipo;
        this.certidao = certidao;
        this.peticao = peticao;
        this.escritura = escritura;
        this.inventariado = inventariado;
        this.advogado = advogado;
        this.valor = valor;
        this.paralizado = paralizado;
        
        this.recDocumentos = false;
        this.enviaAF = false;
        this.pgtDAE = false;
        this.certQuitacao = false;
        this.certNegativa = false;
        this.textoPronto = false;
        this.assinaturas = false;
        this.pronto = false;
        
        this.dataEscritura = dataEscritura;
        this.inventariante = inventariante;
        this.ordemServico = ordemServico;
        this.cpfInventariado = cpfInventariado;
    }*/
    
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getCod() {
        return cod;
    }

    public void setData(String data) {
        this.data = data;
    }

    public String getData() {
        return data;
    }

    public void setCod(String cod) {
        this.cod = cod;
    }

    public Tipo getTipo() {
        return tipo;
    }

    public void setTipo(Tipo tipo) {
        this.tipo = tipo;
    }

    public boolean isCertidao() {
        return certidao;
    }

    public void setCertidao(boolean certidao) {
        this.certidao = certidao;
    }

    public boolean isPeticao() {
        return peticao;
    }

    public void setPeticao(boolean peticao) {
        this.peticao = peticao;
    }

    public boolean isEscritura() {
        return escritura;
    }

    public void setEscritura(boolean escritura) {
        this.escritura = escritura;
    }

    public String getInventariado() {
        return inventariado;
    }

    public void setInventariado(String inventariado) {
        this.inventariado = inventariado;
    }

    public String getAdvogado() {
        return advogado;
    }

    public void setAdvogado(String advogado) {
        this.advogado = advogado;
    }

    public double getValor() {
        return valor;
    }

    public void setValor(double valor) {
        this.valor = valor;
    }

    public boolean isParalizado() {
        return paralizado;
    }

    public void setParalizado(boolean paralizado) {
        this.paralizado = paralizado;
    }

    public boolean isRecDocumentos() {
        return recDocumentos;
    }

    public void setRecDocumentos(boolean recDocumentos) {
        this.recDocumentos = recDocumentos;
    }

    public boolean isEnviaAF() {
        return enviaAF;
    }

    public void setEnviaAF(boolean enviaAF) {
        this.enviaAF = enviaAF;
    }

    public boolean isPgtDAE() {
        return pgtDAE;
    }

    public void setPgtDAE(boolean pgtDAE) {
        this.pgtDAE = pgtDAE;
    }

    public boolean isCertQuitacao() {
        return certQuitacao;
    }

    public void setCertQuitacao(boolean certQuitacao) {
        this.certQuitacao = certQuitacao;
    }

    public boolean isCertNegativa() {
        return certNegativa;
    }

    public void setCertNegativa(boolean certNegativa) {
        this.certNegativa = certNegativa;
    }

    public boolean isTextoPronto() {
        return textoPronto;
    }

    public void setTextoPronto(boolean textoPronto) {
        this.textoPronto = textoPronto;
    }

    public boolean isAssinaturas() {
        return assinaturas;
    }

    public void setAssinaturas(boolean assinaturas) {
        this.assinaturas = assinaturas;
    }

    public boolean isPronto() {
        return pronto;
    }

    public void setPronto(boolean pronto) {
        this.pronto = pronto;
    }

    public String getDataEscritura() {
        return dataEscritura;
    }

    public void setDataEscritura(String dataEscritura) {
        this.dataEscritura = dataEscritura;
    }

    public String getInventariante() {
        return inventariante;
    }

    public void setInventariante(String inventariante) {
        this.inventariante = inventariante;
    }

    public String getOrdemServico() {
        return ordemServico;
    }

    public void setOrdemServico(String ordemServico) {
        this.ordemServico = ordemServico;
    }

    public String getCpfInventariado() {
        return cpfInventariado;
    }

    public void setCpfInventariado(String cpfInventariado) {
        this.cpfInventariado = cpfInventariado;
    }
    
    

    @Override
    public String toString() {
        return "Protocolo{" + "id=" + id + ", cod=" + cod + ", tipo=" + tipo + ", certidao=" + certidao + ", peticao=" + peticao + ", escritura=" + escritura + ", inventariado=" + inventariado + ", advogado=" + advogado + ", valor=" + valor + ", paralizado=" + paralizado + '}';
    }
    
    
    
    
}
