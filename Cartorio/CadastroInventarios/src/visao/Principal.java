package visao;

import Controle.GProtocolo;
import java.awt.Image;
import java.awt.Toolkit;
import java.util.ArrayList;
import java.util.Comparator;
import javax.swing.ButtonGroup;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.table.AbstractTableModel;
import modelo.Protocolo;
import modelo.Tipo;
import utilitarios.Info;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author Samuel
 */
public class Principal extends javax.swing.JFrame {

    GProtocolo gProtocolo = new GProtocolo();
    Protocolo[][] a = new Protocolo[0][0];
    String[] b = {"Cod.", "Data Entrada", "Data Esc.", "Ordem Serv.", "Serviço", "CPF Invento.","Inventariado", "Inventariante", "Advogado", "Cálculo", "Situação"};
    Protocolo selecionada;
    ArrayList<Protocolo> li = gProtocolo.selecionaTodosInventarios();

    private Info info = new Info();
    private ButtonGroup grupoBotao = new ButtonGroup();
    private ButtonGroup grupoBotaoOrdem = new ButtonGroup();

    /**
     * Creates new form Principal
     */
    public Principal() {
        initComponents();

        Image iconeTitulo = Toolkit.getDefaultToolkit().getImage(info.getIconeImagem());
        this.setIconImage(iconeTitulo);
        setIconImage(iconeTitulo);
        //desktop.setOpaque(rootPaneCheckingEnabled);

        grupoBotao.add(rbInventario);
        grupoBotao.add(rbSobre);
        rbInventario.setSelected(true);
        
        grupoBotaoOrdem.add(rbCod);
        grupoBotaoOrdem.add(rbInventariado);
        grupoBotaoOrdem.add(rbInventariante);

        setExtendedState(JFrame.MAXIMIZED_BOTH);
        atualizaTabela();

        this.setTitle(info.getTitulo());
        txtRodape.setText(info.getRodape());

        setDefaultCloseOperation(DO_NOTHING_ON_CLOSE);
    }

    /*@Override
    public void setDefaultCloseOperation(int v){
        if (v == DO_NOTHING_ON_CLOSE) {
            fechar();
        }
        
    }*/
    private void atualizaTabela() {
        a = new Protocolo[li.size()][1];
        for (int i = 0; i < li.size(); i++) {
            a[i][0] = li.get(i);
        }

        tabela.setModel(new Minha());
        tabela.setRowHeight(30);
        tabela.getColumnModel().getColumn(0).setPreferredWidth(20); //cod
        tabela.getColumnModel().getColumn(1).setPreferredWidth(30); //data entrada
        tabela.getColumnModel().getColumn(2).setPreferredWidth(30); //data esc
        tabela.getColumnModel().getColumn(3).setPreferredWidth(35); //ordem
        tabela.getColumnModel().getColumn(4).setPreferredWidth(40); //serviço
        tabela.getColumnModel().getColumn(5).setPreferredWidth(50); //cpf
        tabela.getColumnModel().getColumn(6).setPreferredWidth(100); //inventariado
        tabela.getColumnModel().getColumn(7).setPreferredWidth(100); //inventariante
        tabela.getColumnModel().getColumn(8).setPreferredWidth(100); //advogado
        tabela.getColumnModel().getColumn(9).setPreferredWidth(30); //calculo
        tabela.getColumnModel().getColumn(10).setPreferredWidth(280); //situação
        //tabela.getColumnModel().getColumn(6).setPreferredWidth(250);
    }

    private void novo() {
        JFrame frame = new JFrame();
        //Image iconeTitulo = Toolkit.getDefaultToolkit().getImage(info.getIconeImagem());
        //frame.setIconImage(iconeTitulo);
        frame.setTitle("Novo - " + info.getTitulo());
        Image iconeTitulo = Toolkit.getDefaultToolkit().getImage(info.getIconeImagem());
        frame.setIconImage(iconeTitulo);
        setIconImage(iconeTitulo);

        frame.setSize(1000, 550);
        //frame.setTitle("Cheques e Depósitos - " + info.getTitulo());
        NovoProtocolo janela = new NovoProtocolo(frame);
        frame.add(janela);
        janela.setVisible(true);
        System.out.println("OK");
        frame.setVisible(true);
        frame.setLocationRelativeTo(null); //abre centralizada

    }

    private void pesquisar() {
        li = gProtocolo.selecionaTodosInventarios();
        rbInventario.doClick();
        txtCod.setText("");
        txtCod1.setText("");
        txtInventariado.setText("");
        txtCPFInventariado.setText("");
        txtInventariante.setText("");
        txtAdvogado.setText("");
        txtOrdemServico.setText("");
        rbCod.doClick();
        atualizaTabela();
    }

    private void fechar() {
        if (JOptionPane.showConfirmDialog(null, "Deseja fechar?") != 0) {
            return;
        }
        gProtocolo.salvar();
        System.exit(0);
    }

    private void ordena() {
        if (rbCod.isSelected()) {
            li.sort(
                    new Comparator() {
                public int compare(Object o1, Object o2) {
                    Protocolo c1 = (Protocolo) o1;
                    Protocolo c2 = (Protocolo) o2;
                    
                    try {
                        if (c1.getCod().split("/")[1].compareTo(c2.getCod().split("/")[1]) != 0) {
                            return c1.getCod().split("/")[1].compareTo(c2.getCod().split("/")[1]);
                        }
                    } catch (Exception e) {
                    }
                    
                    return c1.getCod().compareToIgnoreCase(c2.getCod());
                }
            });

        }else if (rbInventariado.isSelected()) {
            li.sort(
                    new Comparator() {
                public int compare(Object o1, Object o2) {
                    Protocolo c1 = (Protocolo) o1;
                    Protocolo c2 = (Protocolo) o2;
                    return c1.getInventariado().compareToIgnoreCase(c2.getInventariado());
                }
            });
        }else if (rbInventariante.isSelected()) {
            li.sort(
                    new Comparator() {
                public int compare(Object o1, Object o2) {
                    Protocolo c1 = (Protocolo) o1;
                    Protocolo c2 = (Protocolo) o2;
                    return c1.getInventariante().compareToIgnoreCase(c2.getInventariante());
                }
            });
        }
    }

    class Minha extends AbstractTableModel {

        Protocolo selecionada;

        @Override
        public int getRowCount() {
            return a.length;
        }

        @Override
        public int getColumnCount() {
            return b.length;
        }

        @Override
        public Object getValueAt(int linha, int coluna) {
            String serviço = "";
            String situacao = "<html>";

            switch (coluna) {
                case 0:
                    return a[linha][0].getCod();
                case 1:
                    return a[linha][0].getData();
                case 2:
                    return a[linha][0].getDataEscritura();
                case 3:
                    return a[linha][0].getOrdemServico();
                case 4:
                    if (a[linha][0].isCertidao()) {
                        serviço += "Cert./";
                    }
                    if (a[linha][0].isPeticao()) {
                        serviço += "Pet./";
                    }
                    if (a[linha][0].isEscritura()) {
                        serviço += "Esc";
                    }
                    return serviço;
                case 5:
                    return a[linha][0].getCpfInventariado();
                case 6:
                    return a[linha][0].getInventariado();
                case 7:
                    return a[linha][0].getInventariante();
                case 8:
                    return a[linha][0].getAdvogado();
                case 9:
                    return "R$ " + a[linha][0].getValor();
                case 10:
                    if (a[linha][0].isParalizado()) {
                        return "<html><b style='color: red;'>Paralizada</html>";
                    }
                    if (a[linha][0].isPronto()) {
                        return "<html><b style='color: blue;'>Finalizada</html>";
                    }

                    if (a[linha][0].isRecDocumentos()) {
                        situacao = situacao + "<b style='color: blue;'>Docs.</b>;";
                    } else {
                        situacao = situacao + "<b style='color: red;'>Docs.</b>;";
                    }

                    if (a[linha][0].isEnviaAF()) {
                        situacao = situacao + "<b style='color: blue;'> ITCD</b>;";
                    } else {
                        situacao = situacao + "<b style='color: red;'> ITCD</b>;";
                    }

                    if (a[linha][0].isPgtDAE()) {
                        situacao = situacao + "<b style='color: blue;'> DAE<b>;";
                    } else {
                        situacao = situacao + "<b style='color: red;'> DAE<b>;";
                    }

                    if (a[linha][0].isCertQuitacao()) {
                        situacao = situacao + "<b style='color: blue;'> Cert. Quitação</b>;";
                    } else {
                        situacao = situacao + "<b style='color: red;'> Cert. Quitação</b>;";
                    }

                    if (a[linha][0].isCertNegativa()) {
                        situacao = situacao + "<b style='color: blue;'> Cert. Neg.</b>;";
                    } else {
                        situacao = situacao + "<b style='color: red;'> Cert. Neg.</b>;";
                    }

                    if (a[linha][0].isTextoPronto()) {
                        situacao = situacao + "<b style='color: blue;'> Texto</b>;";
                    } else {
                        situacao = situacao + "<b style='color: red;'> Texto</b>;";
                    }

                    if (a[linha][0].isAssinaturas()) {
                        situacao = situacao + "<b style='color: blue;'> Ass.</b>";
                    } else {
                        situacao = situacao + "<b style='color: red;'> Ass.</b>";
                    }
                    return situacao + "<html>";

                default:
                    return "";
            }

        }

        public String getColumnName(int columnIndex) {
            return b[columnIndex];
        }

        public boolean isCellEditable(int rowIndex, int columnIndex) {
            return false;
        }

    }

    private Protocolo retornaSelecionada() {
        int linha = tabela.getSelectedRow();

        if (linha == -1) {
            return null;
        }

        selecionada = a[linha][0];
        System.err.println("SELECIONADA = " + selecionada.getId());
        return selecionada;
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        jPanel7 = new javax.swing.JPanel();
        jPanel8 = new javax.swing.JPanel();
        jPanel2 = new javax.swing.JPanel();
        rbInventario = new javax.swing.JRadioButton();
        rbSobre = new javax.swing.JRadioButton();
        jPanel3 = new javax.swing.JPanel();
        lblTipo = new javax.swing.JLabel();
        txtCod = new javax.swing.JTextField();
        jPanel4 = new javax.swing.JPanel();
        txtInventariado = new javax.swing.JTextField();
        lblTipo1 = new javax.swing.JLabel();
        lblTipo2 = new javax.swing.JLabel();
        txtCPFInventariado = new javax.swing.JTextField();
        jPanel5 = new javax.swing.JPanel();
        txtAdvogado = new javax.swing.JTextField();
        jPanel6 = new javax.swing.JPanel();
        btnPesquisar = new javax.swing.JButton();
        jPanel12 = new javax.swing.JPanel();
        txtCod1 = new javax.swing.JTextField();
        jPanel9 = new javax.swing.JPanel();
        txtInventariante = new javax.swing.JTextField();
        jPanel14 = new javax.swing.JPanel();
        rbCod = new javax.swing.JRadioButton();
        rbInventariado = new javax.swing.JRadioButton();
        rbInventariante = new javax.swing.JRadioButton();
        jPanel15 = new javax.swing.JPanel();
        txtOrdemServico = new javax.swing.JTextField();
        btnPesquisar1 = new javax.swing.JButton();
        btnPesquisar2 = new javax.swing.JButton();
        jScrollPane2 = new javax.swing.JScrollPane();
        tabela = new javax.swing.JTable();
        btnNovo = new javax.swing.JButton();
        btnNovo1 = new javax.swing.JButton();
        txtRodape = new javax.swing.JLabel();
        btnNovo2 = new javax.swing.JButton();
        btnNovo3 = new javax.swing.JButton();
        jMenuBar1 = new javax.swing.JMenuBar();
        jMenu1 = new javax.swing.JMenu();
        jMenuItem2 = new javax.swing.JMenuItem();
        jMenuItem3 = new javax.swing.JMenuItem();
        jMenu3 = new javax.swing.JMenu();
        jMenuItem1 = new javax.swing.JMenuItem();
        jMenu2 = new javax.swing.JMenu();
        jMenuItem4 = new javax.swing.JMenuItem();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setBackground(new java.awt.Color(153, 153, 153));

        jPanel1.setBackground(new java.awt.Color(48, 33, 30));

        jPanel7.setBackground(new java.awt.Color(171, 141, 81));
        jPanel7.setBorder(new javax.swing.border.LineBorder(new java.awt.Color(0, 0, 0), 1, true));

        jPanel8.setBackground(new java.awt.Color(226, 203, 136));
        jPanel8.setBorder(javax.swing.BorderFactory.createTitledBorder("Informações"));

        jPanel2.setBackground(new java.awt.Color(226, 203, 136));
        jPanel2.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Tipo", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14), new java.awt.Color(48, 33, 30))); // NOI18N

        rbInventario.setBackground(new java.awt.Color(226, 203, 136));
        rbInventario.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        rbInventario.setText("INV");
        rbInventario.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                rbInventarioActionPerformed(evt);
            }
        });

        rbSobre.setBackground(new java.awt.Color(226, 203, 136));
        rbSobre.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        rbSobre.setText("SOB");
        rbSobre.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                rbSobreActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(rbInventario)
                .addGap(10, 10, 10)
                .addComponent(rbSobre))
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(rbSobre)
                    .addComponent(rbInventario))
                .addGap(0, 5, Short.MAX_VALUE))
        );

        jPanel2Layout.linkSize(javax.swing.SwingConstants.VERTICAL, new java.awt.Component[] {rbInventario, rbSobre});

        jPanel3.setBackground(new java.awt.Color(226, 203, 136));
        jPanel3.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Cod.", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        lblTipo.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        lblTipo.setText("INV/");

        txtCod.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N

        javax.swing.GroupLayout jPanel3Layout = new javax.swing.GroupLayout(jPanel3);
        jPanel3.setLayout(jPanel3Layout);
        jPanel3Layout.setHorizontalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel3Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(lblTipo)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 5, Short.MAX_VALUE)
                .addComponent(txtCod, javax.swing.GroupLayout.PREFERRED_SIZE, 67, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
        );
        jPanel3Layout.setVerticalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                .addComponent(txtCod, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addComponent(lblTipo))
        );

        jPanel4.setBackground(new java.awt.Color(226, 203, 136));
        jPanel4.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Inventariado", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        txtInventariado.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N

        lblTipo1.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        lblTipo1.setText("Nome:");

        lblTipo2.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        lblTipo2.setText("CPF:");

        txtCPFInventariado.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N

        javax.swing.GroupLayout jPanel4Layout = new javax.swing.GroupLayout(jPanel4);
        jPanel4.setLayout(jPanel4Layout);
        jPanel4Layout.setHorizontalGroup(
            jPanel4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel4Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(lblTipo1)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(txtInventariado, javax.swing.GroupLayout.DEFAULT_SIZE, 431, Short.MAX_VALUE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(lblTipo2)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(txtCPFInventariado, javax.swing.GroupLayout.PREFERRED_SIZE, 117, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
        );
        jPanel4Layout.setVerticalGroup(
            jPanel4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel4Layout.createSequentialGroup()
                .addGroup(jPanel4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(lblTipo1)
                    .addComponent(txtInventariado, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(lblTipo2)
                    .addComponent(txtCPFInventariado, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(7, 7, 7))
        );

        jPanel5.setBackground(new java.awt.Color(226, 203, 136));
        jPanel5.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Advogado", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        txtAdvogado.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N

        javax.swing.GroupLayout jPanel5Layout = new javax.swing.GroupLayout(jPanel5);
        jPanel5.setLayout(jPanel5Layout);
        jPanel5Layout.setHorizontalGroup(
            jPanel5Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel5Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(txtAdvogado, javax.swing.GroupLayout.PREFERRED_SIZE, 374, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        jPanel5Layout.setVerticalGroup(
            jPanel5Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(txtAdvogado, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
        );

        jPanel6.setBackground(new java.awt.Color(226, 203, 136));
        jPanel6.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "    ", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        btnPesquisar.setBackground(new java.awt.Color(102, 102, 255));
        btnPesquisar.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        btnPesquisar.setText("Pesquisar");
        btnPesquisar.setCursor(new java.awt.Cursor(java.awt.Cursor.HAND_CURSOR));
        btnPesquisar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnPesquisarActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel6Layout = new javax.swing.GroupLayout(jPanel6);
        jPanel6.setLayout(jPanel6Layout);
        jPanel6Layout.setHorizontalGroup(
            jPanel6Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel6Layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(btnPesquisar, javax.swing.GroupLayout.PREFERRED_SIZE, 116, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
        );
        jPanel6Layout.setVerticalGroup(
            jPanel6Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel6Layout.createSequentialGroup()
                .addGap(0, 0, 0)
                .addComponent(btnPesquisar)
                .addGap(0, 0, 0))
        );

        jPanel12.setBackground(new java.awt.Color(226, 203, 136));
        jPanel12.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Data Entrada", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        txtCod1.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N

        javax.swing.GroupLayout jPanel12Layout = new javax.swing.GroupLayout(jPanel12);
        jPanel12.setLayout(jPanel12Layout);
        jPanel12Layout.setHorizontalGroup(
            jPanel12Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel12Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(txtCod1, javax.swing.GroupLayout.PREFERRED_SIZE, 90, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        jPanel12Layout.setVerticalGroup(
            jPanel12Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(txtCod1, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
        );

        jPanel9.setBackground(new java.awt.Color(226, 203, 136));
        jPanel9.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Inventariante", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        txtInventariante.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N

        javax.swing.GroupLayout jPanel9Layout = new javax.swing.GroupLayout(jPanel9);
        jPanel9.setLayout(jPanel9Layout);
        jPanel9Layout.setHorizontalGroup(
            jPanel9Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel9Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(txtInventariante, javax.swing.GroupLayout.DEFAULT_SIZE, 374, Short.MAX_VALUE)
                .addContainerGap())
        );
        jPanel9Layout.setVerticalGroup(
            jPanel9Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(txtInventariante, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
        );

        jPanel14.setBackground(new java.awt.Color(226, 203, 136));
        jPanel14.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Ordem alfabética por:", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        rbCod.setBackground(new java.awt.Color(226, 203, 136));
        rbCod.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        rbCod.setSelected(true);
        rbCod.setText("Cod.");

        rbInventariado.setBackground(new java.awt.Color(226, 203, 136));
        rbInventariado.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        rbInventariado.setText("Inventariado");

        rbInventariante.setBackground(new java.awt.Color(226, 203, 136));
        rbInventariante.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        rbInventariante.setText("Inventariante");

        javax.swing.GroupLayout jPanel14Layout = new javax.swing.GroupLayout(jPanel14);
        jPanel14.setLayout(jPanel14Layout);
        jPanel14Layout.setHorizontalGroup(
            jPanel14Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel14Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(rbCod)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(rbInventariado)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(rbInventariante)
                .addGap(10, 10, 10))
        );
        jPanel14Layout.setVerticalGroup(
            jPanel14Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel14Layout.createSequentialGroup()
                .addGroup(jPanel14Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(rbCod)
                    .addComponent(rbInventariado)
                    .addComponent(rbInventariante))
                .addGap(0, 0, Short.MAX_VALUE))
        );

        jPanel15.setBackground(new java.awt.Color(226, 203, 136));
        jPanel15.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Ordem de Serviço", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        txtOrdemServico.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N

        javax.swing.GroupLayout jPanel15Layout = new javax.swing.GroupLayout(jPanel15);
        jPanel15.setLayout(jPanel15Layout);
        jPanel15Layout.setHorizontalGroup(
            jPanel15Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel15Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(txtOrdemServico)
                .addContainerGap())
        );
        jPanel15Layout.setVerticalGroup(
            jPanel15Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(txtOrdemServico, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
        );

        javax.swing.GroupLayout jPanel8Layout = new javax.swing.GroupLayout(jPanel8);
        jPanel8.setLayout(jPanel8Layout);
        jPanel8Layout.setHorizontalGroup(
            jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel8Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel8Layout.createSequentialGroup()
                        .addComponent(jPanel9, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(10, 10, 10)
                        .addComponent(jPanel5, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(10, 10, 10)
                        .addComponent(jPanel14, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(jPanel6, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(jPanel8Layout.createSequentialGroup()
                        .addComponent(jPanel2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(10, 10, 10)
                        .addComponent(jPanel3, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(10, 10, 10)
                        .addComponent(jPanel12, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(10, 10, 10)
                        .addComponent(jPanel15, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(jPanel4, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addContainerGap())
        );
        jPanel8Layout.setVerticalGroup(
            jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel8Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                        .addComponent(jPanel3, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addComponent(jPanel2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addComponent(jPanel12, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addComponent(jPanel4, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addComponent(jPanel15, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(jPanel9, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(jPanel5, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(jPanel6, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(jPanel14, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addContainerGap())
        );

        jPanel8Layout.linkSize(javax.swing.SwingConstants.VERTICAL, new java.awt.Component[] {jPanel12, jPanel15, jPanel2, jPanel3, jPanel4, jPanel5, jPanel6, jPanel9});

        btnPesquisar1.setBackground(new java.awt.Color(255, 51, 51));
        btnPesquisar1.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        btnPesquisar1.setText("Excluir");
        btnPesquisar1.setCursor(new java.awt.Cursor(java.awt.Cursor.HAND_CURSOR));
        btnPesquisar1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnPesquisar1ActionPerformed(evt);
            }
        });

        btnPesquisar2.setBackground(new java.awt.Color(255, 255, 51));
        btnPesquisar2.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        btnPesquisar2.setText("Alterar");
        btnPesquisar2.setCursor(new java.awt.Cursor(java.awt.Cursor.HAND_CURSOR));
        btnPesquisar2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnPesquisar2ActionPerformed(evt);
            }
        });

        tabela.setBackground(new java.awt.Color(226, 203, 136));
        tabela.setBorder(new javax.swing.border.LineBorder(new java.awt.Color(0, 0, 0), 1, true));
        tabela.setModel(new Minha());
        tabela.setGridColor(new java.awt.Color(48, 33, 30));
        tabela.setInheritsPopupMenu(true);
        tabela.setSelectionBackground(new java.awt.Color(171, 141, 81));
        tabela.setSelectionForeground(new java.awt.Color(0, 0, 0));
        jScrollPane2.setViewportView(tabela);

        javax.swing.GroupLayout jPanel7Layout = new javax.swing.GroupLayout(jPanel7);
        jPanel7.setLayout(jPanel7Layout);
        jPanel7Layout.setHorizontalGroup(
            jPanel7Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel7Layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addGroup(jPanel7Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jScrollPane2)
                    .addComponent(jPanel8, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel7Layout.createSequentialGroup()
                        .addGap(0, 0, Short.MAX_VALUE)
                        .addComponent(btnPesquisar2)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(btnPesquisar1)))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        jPanel7Layout.setVerticalGroup(
            jPanel7Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel7Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jPanel8, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jScrollPane2, javax.swing.GroupLayout.PREFERRED_SIZE, 339, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(5, 5, 5)
                .addGroup(jPanel7Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(btnPesquisar1)
                    .addComponent(btnPesquisar2))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        btnNovo.setBackground(new java.awt.Color(102, 255, 102));
        btnNovo.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        btnNovo.setIcon(new javax.swing.ImageIcon(getClass().getResource("/utilitarios/add.png"))); // NOI18N
        btnNovo.setText("Novo");
        btnNovo.setBorderPainted(false);
        btnNovo.setCursor(new java.awt.Cursor(java.awt.Cursor.HAND_CURSOR));
        btnNovo.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        btnNovo.setHorizontalTextPosition(javax.swing.SwingConstants.RIGHT);
        btnNovo.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnNovoActionPerformed(evt);
            }
        });

        btnNovo1.setBackground(new java.awt.Color(102, 102, 255));
        btnNovo1.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        btnNovo1.setIcon(new javax.swing.ImageIcon(getClass().getResource("/utilitarios/pesq.png"))); // NOI18N
        btnNovo1.setText("Pesquisar");
        btnNovo1.setCursor(new java.awt.Cursor(java.awt.Cursor.HAND_CURSOR));
        btnNovo1.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        btnNovo1.setHorizontalTextPosition(javax.swing.SwingConstants.RIGHT);
        btnNovo1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnNovo1ActionPerformed(evt);
            }
        });

        txtRodape.setForeground(new java.awt.Color(171, 141, 81));
        txtRodape.setText("SJST - 2018");
        txtRodape.setCursor(new java.awt.Cursor(java.awt.Cursor.DEFAULT_CURSOR));
        txtRodape.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                txtRodapeMouseClicked(evt);
            }
        });

        btnNovo2.setBackground(new java.awt.Color(255, 204, 102));
        btnNovo2.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        btnNovo2.setIcon(new javax.swing.ImageIcon(getClass().getResource("/utilitarios/info.png"))); // NOI18N
        btnNovo2.setText("Sobre");
        btnNovo2.setCursor(new java.awt.Cursor(java.awt.Cursor.HAND_CURSOR));
        btnNovo2.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        btnNovo2.setHorizontalTextPosition(javax.swing.SwingConstants.RIGHT);
        btnNovo2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnNovo2ActionPerformed(evt);
            }
        });

        btnNovo3.setBackground(new java.awt.Color(255, 51, 51));
        btnNovo3.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        btnNovo3.setIcon(new javax.swing.ImageIcon(getClass().getResource("/utilitarios/desliga.png"))); // NOI18N
        btnNovo3.setText("Sair");
        btnNovo3.setCursor(new java.awt.Cursor(java.awt.Cursor.HAND_CURSOR));
        btnNovo3.setHorizontalAlignment(javax.swing.SwingConstants.LEFT);
        btnNovo3.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnNovo3ActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addGap(615, 615, 615)
                .addComponent(txtRodape)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(jPanel7, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(btnNovo)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(btnNovo1)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                        .addComponent(btnNovo2)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(btnNovo3)))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        jPanel1Layout.linkSize(javax.swing.SwingConstants.HORIZONTAL, new java.awt.Component[] {btnNovo, btnNovo1, btnNovo2, btnNovo3});

        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(btnNovo, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                        .addComponent(btnNovo1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(btnNovo2, javax.swing.GroupLayout.DEFAULT_SIZE, 53, Short.MAX_VALUE)
                        .addComponent(btnNovo3, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)))
                .addGap(10, 10, 10)
                .addComponent(jPanel7, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(txtRodape)
                .addContainerGap())
        );

        jPanel1Layout.linkSize(javax.swing.SwingConstants.VERTICAL, new java.awt.Component[] {btnNovo, btnNovo1, btnNovo2, btnNovo3});

        jMenu1.setText("Arquivo");

        jMenuItem2.setAccelerator(javax.swing.KeyStroke.getKeyStroke(java.awt.event.KeyEvent.VK_N, java.awt.event.InputEvent.CTRL_MASK));
        jMenuItem2.setIcon(new javax.swing.ImageIcon(getClass().getResource("/utilitarios/add.png"))); // NOI18N
        jMenuItem2.setText("Novo");
        jMenuItem2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuItem2ActionPerformed(evt);
            }
        });
        jMenu1.add(jMenuItem2);

        jMenuItem3.setAccelerator(javax.swing.KeyStroke.getKeyStroke(java.awt.event.KeyEvent.VK_P, java.awt.event.InputEvent.CTRL_MASK));
        jMenuItem3.setIcon(new javax.swing.ImageIcon(getClass().getResource("/utilitarios/pesq.png"))); // NOI18N
        jMenuItem3.setText("Pesquisar");
        jMenuItem3.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuItem3ActionPerformed(evt);
            }
        });
        jMenu1.add(jMenuItem3);

        jMenuBar1.add(jMenu1);

        jMenu3.setText("Ajuda");

        jMenuItem1.setAccelerator(javax.swing.KeyStroke.getKeyStroke(java.awt.event.KeyEvent.VK_S, java.awt.event.InputEvent.ALT_MASK));
        jMenuItem1.setIcon(new javax.swing.ImageIcon(getClass().getResource("/utilitarios/info.png"))); // NOI18N
        jMenuItem1.setText("Sobre");
        jMenuItem1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuItem1ActionPerformed(evt);
            }
        });
        jMenu3.add(jMenuItem1);

        jMenuBar1.add(jMenu3);

        jMenu2.setText("Sair");

        jMenuItem4.setAccelerator(javax.swing.KeyStroke.getKeyStroke(java.awt.event.KeyEvent.VK_F4, java.awt.event.InputEvent.ALT_MASK));
        jMenuItem4.setIcon(new javax.swing.ImageIcon(getClass().getResource("/utilitarios/desliga.png"))); // NOI18N
        jMenuItem4.setText("Sair");
        jMenuItem4.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuItem4ActionPerformed(evt);
            }
        });
        jMenu2.add(jMenuItem4);

        jMenuBar1.add(jMenu2);

        setJMenuBar(jMenuBar1);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void btnPesquisarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnPesquisarActionPerformed
        // TODO add your handling code here:
        Tipo tipo = null;
        if (rbInventario.isSelected()) {
            tipo = Tipo.INVENTARIO;
        } else if (rbSobre.isSelected()) {
            tipo = Tipo.SOBREPARTILHA;
        }
        li = gProtocolo.pesquisa(tipo, txtCod.getText(), txtCod1.getText(), txtInventariado.getText(), txtAdvogado.getText(), txtInventariante.getText(), txtCPFInventariado.getText(), txtOrdemServico.getText());

        ordena();
        atualizaTabela();
    }//GEN-LAST:event_btnPesquisarActionPerformed

    private void btnNovoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnNovoActionPerformed
        // TODO add your handling code here:
        novo();
    }//GEN-LAST:event_btnNovoActionPerformed

    private void btnPesquisar2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnPesquisar2ActionPerformed
        // TODO add your handling code here:
        try {
            JFrame frame = new JFrame();
            //Image iconeTitulo = Toolkit.getDefaultToolkit().getImage(info.getIconeImagem());
            //frame.setIconImage(iconeTitulo);

            frame.setTitle("Editar - " + info.getTitulo());
            Image iconeTitulo = Toolkit.getDefaultToolkit().getImage(info.getIconeImagem());
            frame.setIconImage(iconeTitulo);
            setIconImage(iconeTitulo);

            frame.setSize(1000, 550);
            //frame.setTitle("Cheques e Depósitos - " + info.getTitulo());
            NovoProtocolo janela = new NovoProtocolo(retornaSelecionada(), frame);
            frame.add(janela);
            janela.setVisible(true);
            System.out.println("OK");
            frame.setVisible(true);
            frame.setLocationRelativeTo(null); //abre centralizada
        } catch (Exception e) {

        }

    }//GEN-LAST:event_btnPesquisar2ActionPerformed

    private void btnPesquisar1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnPesquisar1ActionPerformed
        // TODO add your handling code here:
        if (JOptionPane.showConfirmDialog(null, "Tem certeza que deseja excluir?") != 0) {
            return;
        }
        if (gProtocolo.excluir(retornaSelecionada())) {
            JOptionPane.showMessageDialog(null, "Sucesso!", "Excluído com sucesso", 1);
        } else {
            JOptionPane.showMessageDialog(null, "Erro!", "Não foi possível excluir", 0);
        }
    }//GEN-LAST:event_btnPesquisar1ActionPerformed

    private void rbInventarioActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_rbInventarioActionPerformed
        // TODO add your handling code here:
        lblTipo.setText("INV/");
    }//GEN-LAST:event_rbInventarioActionPerformed

    private void rbSobreActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_rbSobreActionPerformed
        // TODO add your handling code here:
        lblTipo.setText("SOB/");
    }//GEN-LAST:event_rbSobreActionPerformed

    private void btnNovo1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnNovo1ActionPerformed
        // TODO add your handling code here:
        pesquisar();
    }//GEN-LAST:event_btnNovo1ActionPerformed

    private void txtRodapeMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_txtRodapeMouseClicked
        // TODO add your handling code here:
        Sobre s = new Sobre(this, rootPaneCheckingEnabled);
        s.setVisible(true);
    }//GEN-LAST:event_txtRodapeMouseClicked

    private void jMenuItem1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuItem1ActionPerformed
        // TODO add your handling code here:
        Sobre s = new Sobre(this, rootPaneCheckingEnabled);
        s.setVisible(true);
    }//GEN-LAST:event_jMenuItem1ActionPerformed

    private void jMenuItem2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuItem2ActionPerformed
        // TODO add your handling code here:
        novo();
    }//GEN-LAST:event_jMenuItem2ActionPerformed

    private void jMenuItem3ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuItem3ActionPerformed
        // TODO add your handling code here:
        pesquisar();
    }//GEN-LAST:event_jMenuItem3ActionPerformed

    private void btnNovo2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnNovo2ActionPerformed
        // TODO add your handling code here:
        Sobre s = new Sobre(this, rootPaneCheckingEnabled);
        s.setVisible(true);
    }//GEN-LAST:event_btnNovo2ActionPerformed

    private void btnNovo3ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnNovo3ActionPerformed
        // TODO add your handling code here:
        fechar();
    }//GEN-LAST:event_btnNovo3ActionPerformed

    private void jMenuItem4ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuItem4ActionPerformed
        // TODO add your handling code here:
        fechar();

    }//GEN-LAST:event_jMenuItem4ActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For detailss ee http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Principal.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Principal.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Principal.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Principal.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Principal().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnNovo;
    private javax.swing.JButton btnNovo1;
    private javax.swing.JButton btnNovo2;
    private javax.swing.JButton btnNovo3;
    private javax.swing.JButton btnPesquisar;
    private javax.swing.JButton btnPesquisar1;
    private javax.swing.JButton btnPesquisar2;
    private javax.swing.JMenu jMenu1;
    private javax.swing.JMenu jMenu2;
    private javax.swing.JMenu jMenu3;
    private javax.swing.JMenuBar jMenuBar1;
    private javax.swing.JMenuItem jMenuItem1;
    private javax.swing.JMenuItem jMenuItem2;
    private javax.swing.JMenuItem jMenuItem3;
    private javax.swing.JMenuItem jMenuItem4;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel12;
    private javax.swing.JPanel jPanel13;
    private javax.swing.JPanel jPanel14;
    private javax.swing.JPanel jPanel15;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JPanel jPanel3;
    private javax.swing.JPanel jPanel4;
    private javax.swing.JPanel jPanel5;
    private javax.swing.JPanel jPanel6;
    private javax.swing.JPanel jPanel7;
    private javax.swing.JPanel jPanel8;
    private javax.swing.JPanel jPanel9;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JLabel lblTipo;
    private javax.swing.JLabel lblTipo1;
    private javax.swing.JLabel lblTipo2;
    private javax.swing.JRadioButton rbCod;
    private javax.swing.JRadioButton rbInventariado;
    private javax.swing.JRadioButton rbInventariante;
    private javax.swing.JRadioButton rbInventario;
    private javax.swing.JRadioButton rbSobre;
    private javax.swing.JTable tabela;
    private javax.swing.JTextField txtAdvogado;
    private javax.swing.JTextField txtCPFInventariado;
    private javax.swing.JTextField txtCod;
    private javax.swing.JTextField txtCod1;
    private javax.swing.JTextField txtCod2;
    private javax.swing.JTextField txtInventariado;
    private javax.swing.JTextField txtInventariante;
    private javax.swing.JTextField txtOrdemServico;
    private javax.swing.JLabel txtRodape;
    // End of variables declaration//GEN-END:variables
}
