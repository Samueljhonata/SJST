/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modelo;

/**
 *
 * @author Samuel
 */
public enum Tipo {
    INVENTARIO(1,"INV"),
    SOBREPARTILHA(2,"SOB");
    
    private int valor;
    private String cod;

    private Tipo(int valor, String cod) {
        this.valor = valor;
        this.cod = cod;
    }

    public int getValor() {
        return valor;
    }

    public String getCod() {
        return cod;
    }
    
}
