
package utilitarios;


public class Info {
    private static String nomePrograma = "Controle de Inventários e Sobrepartilhas";
    private static String versao = "v1.1";
    private static String titulo = nomePrograma + " - SJST "+versao;
    private static String desenvolvedor = "Samuel Jhonata S. Tavares";
    private static String contato = "samueljhonatast@hotmail.com - (37) 9 9981-9507";
    private static String ano = "2018";
    private static String implantacao = "02/08/2018";
    private static String rodape = "© SJST - "+ano+" - "+versao+" ©";
    private static String []atualizacoes = {"- Adição de informações requeridas pelo cliente",
                                            "- Ordenação variada na hora de mostrar a pesquisa"
                                            }; 
    private static String ultimaAtualizacao = "08/08/2018";
    private static String iconeImagem = "imagens/logo.png";

    
    public Info() {
        /*Arquivo arq = new Arquivo();
        try {
            ArrayList<String> a = arq.lerArquivo("config.txt");
            caminhoImagens = a.get(0);
            String b = "";
            for (int i = 0; i < a.size(); i++) {
                b = b.concat(" "+a.get(i));
            }
            JOptionPane.showMessageDialog(null, b, "Erro", 1);
        } catch (Exception ex) {
            JOptionPane.showMessageDialog(null, "Selecione o tipo de movimento!", "Erro", 0);
        }*/
        
    }
    
    public String getNomePrograma() {
        return nomePrograma;
    }

    public String getVersao() {
        return versao;
    }

    public String getTitulo() {
        return titulo;
    }

    public static String getRodape() {
        return rodape;
    }

    public static String getDesenvolvedor() {
        return desenvolvedor;
    }

    public static void setDesenvolvedor(String desenvolvedor) {
        Info.desenvolvedor = desenvolvedor;
    }

    public static String getAno() {
        return ano;
    }

    public static void setAno(String ano) {
        Info.ano = ano;
    }

    public static String[] getAtualizacoes() {
        return atualizacoes;
    }

    public static void setAtualizacoes(String[] atualizacoes) {
        Info.atualizacoes = atualizacoes;
    }

    public static String getUltimaAtualizacao() {
        return ultimaAtualizacao;
    }

    public static void setUltimaAtualizacao(String ultimaAtualizacao) {
        Info.ultimaAtualizacao = ultimaAtualizacao;
    }

    public static String getContato() {
        return contato;
    }

    public static void setContato(String contato) {
        Info.contato = contato;
    }

    public static String getIconeImagem() {
        return iconeImagem;
    }

    public static void setIconeImagem(String iconeImagem) {
        Info.iconeImagem = iconeImagem;
    }

    public static String getImplantacao() {
        return implantacao;
    }

    public static void setImplantacao(String implantacao) {
        Info.implantacao = implantacao;
    }
    
    
}
