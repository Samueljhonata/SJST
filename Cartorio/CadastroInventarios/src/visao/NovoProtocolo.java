/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package visao;

import Controle.GProtocolo;
import java.awt.Image;
import java.awt.Toolkit;
import java.text.SimpleDateFormat;
import java.util.Date;
import javax.swing.ButtonGroup;
import javax.swing.JFrame;
import javax.swing.JOptionPane;
import modelo.Protocolo;
import modelo.Tipo;
import persistencia.Numeracao;
import utilitarios.Info;

/**
 *
 * @author Samuel
 */
public class NovoProtocolo extends javax.swing.JPanel {
    private int tipo = 0;
    private ButtonGroup grupoBotao = new ButtonGroup();
    private GProtocolo gProtocolo = new GProtocolo();
    private Protocolo protocolo = null;
    private Info info = new Info();
    private SimpleDateFormat formatoData = new SimpleDateFormat("dd/MM/yyyy");
    private Numeracao n = new Numeracao();
    private JFrame pai;
    
    /**
     * Creates new form NovoProtocolo
     */
    
    private void iniciar(){
        try {
            txtRodape.setText(info.getRodape());
            
        } catch (Exception e) {

        }
        
    }
    
    public NovoProtocolo(JFrame pai) {
        initComponents();
        this.pai = pai;
        iniciar();
        grupoBotao.add(rbInventario);
        grupoBotao.add(rbSobrepartilha);
        rbInventario.setSelected(true);
        
        
        
        if (tipo == 0) { //novo
            cbDocumentos.setSelected(true);
            Date d = new Date();
            txtData.setText(formatoData.format(d));
            //txtCod.setText(n.calculaProx(formatoData.format(d), Tipo.INVENTARIO));
            
        }else{
            
        }
        
        rbInventario.doClick();
    }
    
    
    public NovoProtocolo(Protocolo protocolo, JFrame pai){
        initComponents();
        iniciar();
        this.pai = pai;
        
        tipo = 1;
        
        grupoBotao.add(rbInventario);
        grupoBotao.add(rbSobrepartilha);
        
        rbInventario.setEnabled(false);
        rbSobrepartilha.setEnabled(false);
        
        txtCod.setEnabled(false);
        
        this.protocolo = protocolo;
        
        if (protocolo == null) {
            return;
        }
        System.out.println(protocolo);
        
        if (protocolo.getTipo() == Tipo.INVENTARIO) {
            rbInventario.setSelected(true);
        }else if (protocolo.getTipo() == Tipo.SOBREPARTILHA) {
            rbSobrepartilha.setSelected(true);
        }
        
        txtCod.setText(protocolo.getCod());
        txtData.setText(protocolo.getData());
        txtDataEscritura.setText(protocolo.getDataEscritura());
        txtOrdemServico.setText(protocolo.getOrdemServico());
        
        cbCertidao.setSelected(protocolo.isCertidao());
        cbPeticao.setSelected(protocolo.isPeticao());
        cbEscritura.setSelected(protocolo.isEscritura());
        
        txtCPFInventariado.setText(protocolo.getCpfInventariado());
        txtInventariado.setText(protocolo.getInventariado());
        txtInventariante.setText(protocolo.getInventariante());
        txtAdvogado.setText(protocolo.getAdvogado());
        
        txtValor.setText((protocolo.getValor() + "").replace(".", ","));
        
        cbParalizada.setSelected(protocolo.isParalizado());
        
        cbDocumentos.setSelected(protocolo.isRecDocumentos());
        cbITCD.setSelected(protocolo.isEnviaAF());
        cbDAE.setSelected(protocolo.isPgtDAE());
        cbCertQuitacao.setSelected(protocolo.isCertQuitacao());
        cbCertNegativa.setSelected(protocolo.isCertNegativa());
        cbTextoPronto.setSelected(protocolo.isTextoPronto());
        cbAssinaturas.setSelected(protocolo.isAssinaturas());
        cbPronto.setSelected(protocolo.isPronto());
    }
    
    private void monta(){
        double valor = 0;
        Tipo tipoProtocolo = null;
        try {
            valor = Double.parseDouble(txtValor.getText().replace(",", "."));
        } catch (Exception e) {
        }
        
        if (tipo == 0) { //novo
            
            if (rbInventario.isSelected()) {
                tipoProtocolo = Tipo.INVENTARIO;
            }else if (rbSobrepartilha.isSelected()) {
                tipoProtocolo = Tipo.SOBREPARTILHA;
            }
            
            protocolo = new Protocolo(-1, txtCod.getText(), tipoProtocolo, txtData.getText(), cbCertidao.isSelected(), cbPeticao.isSelected(),
                    cbEscritura.isSelected(), txtInventariado.getText(), txtAdvogado.getText(), valor, cbParalizada.isSelected(),
                    cbDocumentos.isSelected(), cbITCD.isSelected(), cbDAE.isSelected(), cbCertQuitacao.isSelected(),
                    cbCertNegativa.isSelected(), cbTextoPronto.isSelected(), cbAssinaturas.isSelected(), cbPronto.isSelected(),
                    txtDataEscritura.getText(), txtInventariante.getText(), txtOrdemServico.getText(),txtCPFInventariado.getText()
                    );
        }else{
            
            protocolo = new Protocolo(protocolo.getId(), protocolo.getCod(), protocolo.getTipo(), txtData.getText(), cbCertidao.isSelected(), cbPeticao.isSelected(),
                    cbEscritura.isSelected(), txtInventariado.getText(), txtAdvogado.getText(), valor, cbParalizada.isSelected(),
                    cbDocumentos.isSelected(), cbITCD.isSelected(), cbDAE.isSelected(), cbCertQuitacao.isSelected(),
                    cbCertNegativa.isSelected(), cbTextoPronto.isSelected(), cbAssinaturas.isSelected(), cbPronto.isSelected(),
                    txtDataEscritura.getText(), txtInventariante.getText(), txtOrdemServico.getText(),txtCPFInventariado.getText()
                    );
            
            /*protocolo.setData(txtData.getText());
            protocolo.setValor(valor);
            
            protocolo.setCertidao(cbCertidao.isSelected());
            protocolo.setPeticao(cbPeticao.isSelected());
            protocolo.setEscritura(cbEscritura.isSelected());
            
            protocolo.setInventariado(txtInventariado.getText());
            protocolo.setAdvogado(txtAdvogado.getText());
            
            protocolo.setParalizado(cbParalizada.isSelected());
            
            protocolo.setRecDocumentos(cbDocumentos.isSelected());
            protocolo.setEnviaAF(cbITCD.isSelected());
            protocolo.setPgtDAE(cbDAE.isSelected());
            protocolo.setCertQuitacao(cbCertQuitacao.isSelected());
            protocolo.setCertNegativa(cbCertQuitacao.isSelected());
            protocolo.setTextoPronto(cbTextoPronto.isSelected());
            protocolo.setAssinaturas(cbAssinaturas.isSelected());
            protocolo.setPronto(cbPronto.isSelected());*/
        }
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
        jPanel8 = new javax.swing.JPanel();
        jPanel2 = new javax.swing.JPanel();
        rbInventario = new javax.swing.JRadioButton();
        rbSobrepartilha = new javax.swing.JRadioButton();
        jPanel3 = new javax.swing.JPanel();
        lblTipo = new javax.swing.JLabel();
        txtCod = new javax.swing.JTextField();
        jPanel4 = new javax.swing.JPanel();
        txtInventariado = new javax.swing.JTextField();
        txtCPFInventariado = new javax.swing.JTextField();
        lblTipo1 = new javax.swing.JLabel();
        lblTipo2 = new javax.swing.JLabel();
        jPanel5 = new javax.swing.JPanel();
        txtAdvogado = new javax.swing.JTextField();
        jPanel6 = new javax.swing.JPanel();
        jButton2 = new javax.swing.JButton();
        btnPesquisar1 = new javax.swing.JButton();
        jPanel7 = new javax.swing.JPanel();
        cbCertidao = new javax.swing.JCheckBox();
        cbPeticao = new javax.swing.JCheckBox();
        cbEscritura = new javax.swing.JCheckBox();
        jPanel10 = new javax.swing.JPanel();
        cbITCD = new javax.swing.JCheckBox();
        cbDocumentos = new javax.swing.JCheckBox();
        cbDAE = new javax.swing.JCheckBox();
        cbCertQuitacao = new javax.swing.JCheckBox();
        cbCertNegativa = new javax.swing.JCheckBox();
        cbTextoPronto = new javax.swing.JCheckBox();
        cbAssinaturas = new javax.swing.JCheckBox();
        cbPronto = new javax.swing.JCheckBox();
        jPanel11 = new javax.swing.JPanel();
        cbParalizada = new javax.swing.JCheckBox();
        jPanel12 = new javax.swing.JPanel();
        txtData = new javax.swing.JTextField();
        jPanel13 = new javax.swing.JPanel();
        jLabel3 = new javax.swing.JLabel();
        txtValor = new javax.swing.JTextField();
        jPanel14 = new javax.swing.JPanel();
        txtDataEscritura = new javax.swing.JTextField();
        jPanel15 = new javax.swing.JPanel();
        txtOrdemServico = new javax.swing.JTextField();
        jPanel16 = new javax.swing.JPanel();
        txtInventariante = new javax.swing.JTextField();
        txtRodape = new javax.swing.JLabel();

        jPanel1.setBackground(new java.awt.Color(48, 33, 30));

        jPanel8.setBackground(new java.awt.Color(226, 203, 136));
        jPanel8.setBorder(javax.swing.BorderFactory.createTitledBorder("Informações"));

        jPanel2.setBackground(new java.awt.Color(226, 203, 136));
        jPanel2.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Tipo", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        rbInventario.setBackground(new java.awt.Color(226, 203, 136));
        rbInventario.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        rbInventario.setText("INV");
        rbInventario.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                rbInventarioActionPerformed(evt);
            }
        });

        rbSobrepartilha.setBackground(new java.awt.Color(226, 203, 136));
        rbSobrepartilha.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        rbSobrepartilha.setText("SOB");
        rbSobrepartilha.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                rbSobrepartilhaActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(rbInventario)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(rbSobrepartilha)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        jPanel2Layout.linkSize(javax.swing.SwingConstants.HORIZONTAL, new java.awt.Component[] {rbInventario, rbSobrepartilha});

        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(rbSobrepartilha)
                    .addComponent(rbInventario))
                .addGap(0, 8, Short.MAX_VALUE))
        );

        jPanel2Layout.linkSize(javax.swing.SwingConstants.VERTICAL, new java.awt.Component[] {rbInventario, rbSobrepartilha});

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
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(lblTipo)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(txtCod, javax.swing.GroupLayout.PREFERRED_SIZE, 76, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(28, 28, 28))
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

        txtCPFInventariado.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N

        lblTipo1.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        lblTipo1.setText("Nome:");

        lblTipo2.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        lblTipo2.setText("CPF:");

        javax.swing.GroupLayout jPanel4Layout = new javax.swing.GroupLayout(jPanel4);
        jPanel4.setLayout(jPanel4Layout);
        jPanel4Layout.setHorizontalGroup(
            jPanel4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel4Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(lblTipo1)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(txtInventariado)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(lblTipo2)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(txtCPFInventariado, javax.swing.GroupLayout.PREFERRED_SIZE, 117, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
        );
        jPanel4Layout.setVerticalGroup(
            jPanel4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                .addComponent(txtInventariado, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addComponent(txtCPFInventariado, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addComponent(lblTipo1)
                .addComponent(lblTipo2))
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
                .addComponent(txtAdvogado)
                .addContainerGap())
        );
        jPanel5Layout.setVerticalGroup(
            jPanel5Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(txtAdvogado, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
        );

        jPanel6.setBackground(new java.awt.Color(226, 203, 136));
        jPanel6.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "    ", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        jButton2.setBackground(new java.awt.Color(102, 255, 102));
        jButton2.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        jButton2.setText("Salvar");
        jButton2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton2ActionPerformed(evt);
            }
        });

        btnPesquisar1.setBackground(new java.awt.Color(255, 102, 102));
        btnPesquisar1.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        btnPesquisar1.setText("Cancelar");
        btnPesquisar1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnPesquisar1ActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel6Layout = new javax.swing.GroupLayout(jPanel6);
        jPanel6.setLayout(jPanel6Layout);
        jPanel6Layout.setHorizontalGroup(
            jPanel6Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel6Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jButton2, javax.swing.GroupLayout.PREFERRED_SIZE, 116, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(btnPesquisar1, javax.swing.GroupLayout.PREFERRED_SIZE, 120, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        jPanel6Layout.linkSize(javax.swing.SwingConstants.HORIZONTAL, new java.awt.Component[] {btnPesquisar1, jButton2});

        jPanel6Layout.setVerticalGroup(
            jPanel6Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel6Layout.createSequentialGroup()
                .addGap(0, 0, 0)
                .addGroup(jPanel6Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jButton2)
                    .addComponent(btnPesquisar1))
                .addGap(0, 0, 0))
        );

        jPanel6Layout.linkSize(javax.swing.SwingConstants.VERTICAL, new java.awt.Component[] {btnPesquisar1, jButton2});

        jPanel7.setBackground(new java.awt.Color(226, 203, 136));
        jPanel7.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Serviço", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        cbCertidao.setBackground(new java.awt.Color(226, 203, 136));
        cbCertidao.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        cbCertidao.setText("Certidão");

        cbPeticao.setBackground(new java.awt.Color(226, 203, 136));
        cbPeticao.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        cbPeticao.setText("Petição");

        cbEscritura.setBackground(new java.awt.Color(226, 203, 136));
        cbEscritura.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        cbEscritura.setText("Escritura");

        javax.swing.GroupLayout jPanel7Layout = new javax.swing.GroupLayout(jPanel7);
        jPanel7.setLayout(jPanel7Layout);
        jPanel7Layout.setHorizontalGroup(
            jPanel7Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel7Layout.createSequentialGroup()
                .addGap(14, 14, 14)
                .addGroup(jPanel7Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(cbEscritura)
                    .addComponent(cbPeticao)
                    .addComponent(cbCertidao))
                .addContainerGap(58, Short.MAX_VALUE))
        );
        jPanel7Layout.setVerticalGroup(
            jPanel7Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel7Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(cbCertidao)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(cbPeticao)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(cbEscritura)
                .addGap(0, 0, 0))
        );

        jPanel10.setBackground(new java.awt.Color(226, 203, 136));
        jPanel10.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Processo", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        cbITCD.setBackground(new java.awt.Color(226, 203, 136));
        cbITCD.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        cbITCD.setText("ITCD");

        cbDocumentos.setBackground(new java.awt.Color(226, 203, 136));
        cbDocumentos.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        cbDocumentos.setText("Documentos");

        cbDAE.setBackground(new java.awt.Color(226, 203, 136));
        cbDAE.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        cbDAE.setText("DAE");

        cbCertQuitacao.setBackground(new java.awt.Color(226, 203, 136));
        cbCertQuitacao.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        cbCertQuitacao.setText("Certidão Quitação");

        cbCertNegativa.setBackground(new java.awt.Color(226, 203, 136));
        cbCertNegativa.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        cbCertNegativa.setText("Certidão Negativa");

        cbTextoPronto.setBackground(new java.awt.Color(226, 203, 136));
        cbTextoPronto.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        cbTextoPronto.setText("Texto Pronto");

        cbAssinaturas.setBackground(new java.awt.Color(226, 203, 136));
        cbAssinaturas.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        cbAssinaturas.setText("Assinaturas");

        cbPronto.setBackground(new java.awt.Color(226, 203, 136));
        cbPronto.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        cbPronto.setText("Finalizado");
        cbPronto.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                cbProntoActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel10Layout = new javax.swing.GroupLayout(jPanel10);
        jPanel10.setLayout(jPanel10Layout);
        jPanel10Layout.setHorizontalGroup(
            jPanel10Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel10Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel10Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel10Layout.createSequentialGroup()
                        .addComponent(cbDocumentos)
                        .addGap(18, 18, 18)
                        .addComponent(cbITCD)
                        .addGap(18, 18, 18)
                        .addComponent(cbDAE))
                    .addGroup(jPanel10Layout.createSequentialGroup()
                        .addComponent(cbCertNegativa)
                        .addGap(18, 18, 18)
                        .addComponent(cbTextoPronto)
                        .addGap(18, 18, 18)
                        .addComponent(cbAssinaturas)))
                .addGap(18, 18, 18)
                .addGroup(jPanel10Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(cbCertQuitacao)
                    .addComponent(cbPronto))
                .addContainerGap(339, Short.MAX_VALUE))
        );

        jPanel10Layout.linkSize(javax.swing.SwingConstants.HORIZONTAL, new java.awt.Component[] {cbAssinaturas, cbCertNegativa, cbCertQuitacao, cbDAE, cbDocumentos, cbITCD, cbPronto, cbTextoPronto});

        jPanel10Layout.setVerticalGroup(
            jPanel10Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel10Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel10Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(cbITCD)
                    .addComponent(cbDocumentos)
                    .addComponent(cbDAE)
                    .addComponent(cbCertQuitacao))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(jPanel10Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(cbCertNegativa)
                    .addComponent(cbTextoPronto)
                    .addComponent(cbAssinaturas)
                    .addComponent(cbPronto)))
        );

        jPanel10Layout.linkSize(javax.swing.SwingConstants.VERTICAL, new java.awt.Component[] {cbAssinaturas, cbCertNegativa, cbCertQuitacao, cbDAE, cbDocumentos, cbITCD, cbTextoPronto});

        jPanel11.setBackground(new java.awt.Color(226, 203, 136));
        jPanel11.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Paralizada", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        cbParalizada.setBackground(new java.awt.Color(226, 203, 136));
        cbParalizada.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        cbParalizada.setText("Sim");

        javax.swing.GroupLayout jPanel11Layout = new javax.swing.GroupLayout(jPanel11);
        jPanel11.setLayout(jPanel11Layout);
        jPanel11Layout.setHorizontalGroup(
            jPanel11Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel11Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(cbParalizada)
                .addContainerGap(98, Short.MAX_VALUE))
        );
        jPanel11Layout.setVerticalGroup(
            jPanel11Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel11Layout.createSequentialGroup()
                .addComponent(cbParalizada)
                .addGap(0, 7, Short.MAX_VALUE))
        );

        jPanel12.setBackground(new java.awt.Color(226, 203, 136));
        jPanel12.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Data Entrada", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        txtData.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        txtData.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                txtDataActionPerformed(evt);
            }
        });
        txtData.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                txtDataKeyReleased(evt);
            }
        });

        javax.swing.GroupLayout jPanel12Layout = new javax.swing.GroupLayout(jPanel12);
        jPanel12.setLayout(jPanel12Layout);
        jPanel12Layout.setHorizontalGroup(
            jPanel12Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel12Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(txtData, javax.swing.GroupLayout.PREFERRED_SIZE, 90, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(34, Short.MAX_VALUE))
        );
        jPanel12Layout.setVerticalGroup(
            jPanel12Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(txtData, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
        );

        jPanel13.setBackground(new java.awt.Color(226, 203, 136));
        jPanel13.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Valor", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        jLabel3.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        jLabel3.setText("R$");

        txtValor.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N

        javax.swing.GroupLayout jPanel13Layout = new javax.swing.GroupLayout(jPanel13);
        jPanel13.setLayout(jPanel13Layout);
        jPanel13Layout.setHorizontalGroup(
            jPanel13Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel13Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jLabel3, javax.swing.GroupLayout.PREFERRED_SIZE, 18, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(txtValor)
                .addContainerGap())
        );
        jPanel13Layout.setVerticalGroup(
            jPanel13Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel13Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                .addComponent(txtValor, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addComponent(jLabel3))
        );

        jPanel14.setBackground(new java.awt.Color(226, 203, 136));
        jPanel14.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Data Escritura", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        txtDataEscritura.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        txtDataEscritura.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                txtDataEscrituraActionPerformed(evt);
            }
        });
        txtDataEscritura.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                txtDataEscrituraKeyReleased(evt);
            }
        });

        javax.swing.GroupLayout jPanel14Layout = new javax.swing.GroupLayout(jPanel14);
        jPanel14.setLayout(jPanel14Layout);
        jPanel14Layout.setHorizontalGroup(
            jPanel14Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel14Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(txtDataEscritura, javax.swing.GroupLayout.PREFERRED_SIZE, 90, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(19, Short.MAX_VALUE))
        );
        jPanel14Layout.setVerticalGroup(
            jPanel14Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(txtDataEscritura, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
        );

        jPanel15.setBackground(new java.awt.Color(226, 203, 136));
        jPanel15.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "N° Ordem de Serviço", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        txtOrdemServico.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        txtOrdemServico.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                txtOrdemServicoActionPerformed(evt);
            }
        });
        txtOrdemServico.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                txtOrdemServicoKeyReleased(evt);
            }
        });

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

        jPanel16.setBackground(new java.awt.Color(226, 203, 136));
        jPanel16.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Inventariante", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Tahoma", 0, 14))); // NOI18N

        txtInventariante.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N

        javax.swing.GroupLayout jPanel16Layout = new javax.swing.GroupLayout(jPanel16);
        jPanel16.setLayout(jPanel16Layout);
        jPanel16Layout.setHorizontalGroup(
            jPanel16Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel16Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(txtInventariante)
                .addContainerGap())
        );
        jPanel16Layout.setVerticalGroup(
            jPanel16Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(txtInventariante, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
        );

        javax.swing.GroupLayout jPanel8Layout = new javax.swing.GroupLayout(jPanel8);
        jPanel8.setLayout(jPanel8Layout);
        jPanel8Layout.setHorizontalGroup(
            jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel8Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jPanel10, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel8Layout.createSequentialGroup()
                        .addGap(0, 0, Short.MAX_VALUE)
                        .addComponent(jPanel6, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(0, 0, Short.MAX_VALUE))
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel8Layout.createSequentialGroup()
                        .addGroup(jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addComponent(jPanel16, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addGroup(javax.swing.GroupLayout.Alignment.LEADING, jPanel8Layout.createSequentialGroup()
                                .addComponent(jPanel2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(15, 15, 15)
                                .addComponent(jPanel3, javax.swing.GroupLayout.PREFERRED_SIZE, 132, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(15, 15, 15)
                                .addComponent(jPanel12, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(15, 15, 15)
                                .addComponent(jPanel14, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(15, 15, 15)
                                .addComponent(jPanel15, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                            .addComponent(jPanel4, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                            .addComponent(jPanel5, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                        .addGap(10, 10, 10)
                        .addGroup(jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                                .addComponent(jPanel7, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                .addComponent(jPanel13, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                            .addComponent(jPanel11, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))))
                .addContainerGap())
        );
        jPanel8Layout.setVerticalGroup(
            jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel8Layout.createSequentialGroup()
                .addGroup(jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel8Layout.createSequentialGroup()
                        .addGroup(jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jPanel2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jPanel3, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jPanel12, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jPanel14, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jPanel15, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(10, 10, 10)
                        .addComponent(jPanel4, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addComponent(jPanel7, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addGap(10, 10, 10)
                .addGroup(jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jPanel13, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jPanel16, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addGap(10, 10, 10)
                .addGroup(jPanel8Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addComponent(jPanel5, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(jPanel11, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(10, 10, 10)
                .addComponent(jPanel10, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jPanel6, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
        );

        jPanel8Layout.linkSize(javax.swing.SwingConstants.VERTICAL, new java.awt.Component[] {jPanel12, jPanel13, jPanel14, jPanel15, jPanel2, jPanel3, jPanel4, jPanel5});

        txtRodape.setForeground(new java.awt.Color(171, 141, 81));
        txtRodape.setText("SJST - 2018");

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jPanel8, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGap(0, 0, Short.MAX_VALUE)
                        .addComponent(txtRodape)
                        .addGap(0, 0, Short.MAX_VALUE)))
                .addContainerGap())
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jPanel8, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 20, Short.MAX_VALUE)
                .addComponent(txtRodape)
                .addContainerGap())
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(this);
        this.setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
    }// </editor-fold>//GEN-END:initComponents

    private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton2ActionPerformed
        // TODO add your handling code here:
        if (JOptionPane.showConfirmDialog(null, "Confirmar?") != 0) {
                return;
        }
        monta();
        if (tipo == 0) { //novo
            if(gProtocolo.novoProtocolo(protocolo)){
                JOptionPane.showMessageDialog(null, "Sucesso!", "Salvo com sucesso", 1);
                pai.dispose();
            }else{
                JOptionPane.showMessageDialog(null, "Erro!", "Não foi possível salvar", 0);
            }
            System.out.println("Novo");
        }else{
            if(gProtocolo.atualiza(protocolo)){
                JOptionPane.showMessageDialog(null, "Sucesso!", "Salvo com sucesso", 1);
                pai.dispose();
            }else{
                JOptionPane.showMessageDialog(null, "Erro!", "Não foi possível atualizar", 0);
            }
            System.out.println("Atualiza'");
        }
        
    }//GEN-LAST:event_jButton2ActionPerformed

    private void rbInventarioActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_rbInventarioActionPerformed
        // TODO add your handling code here:
        txtCod.setText(n.calculaProx(txtData.getText(), Tipo.INVENTARIO));
        lblTipo.setText("INV/");
    }//GEN-LAST:event_rbInventarioActionPerformed

    private void rbSobrepartilhaActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_rbSobrepartilhaActionPerformed
        // TODO add your handling code here:
        txtCod.setText(n.calculaProx(txtData.getText(), Tipo.SOBREPARTILHA));
        lblTipo.setText("SOB/");
    }//GEN-LAST:event_rbSobrepartilhaActionPerformed

    private void btnPesquisar1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnPesquisar1ActionPerformed
        // TODO add your handling code here:
        if (JOptionPane.showConfirmDialog(null, "Tem certeza que deseja cancelar?") != 0) {
            return;
        }
        pai.dispose();
        
    }//GEN-LAST:event_btnPesquisar1ActionPerformed

    private void cbProntoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_cbProntoActionPerformed
        // TODO add your handling code here:
        
        if (this.cbPronto.isSelected()) {
            this.cbDocumentos.setSelected(true);
            this.cbITCD.setSelected(true);
            this.cbDAE.setSelected(true);
            this.cbCertQuitacao.setSelected(true);
            this.cbCertNegativa.setSelected(true);
            this.cbTextoPronto.setSelected(true);
            this.cbAssinaturas.setSelected(true);
        }else{
            if (tipo == 0) { //novo
                this.cbDocumentos.setSelected(true);
                this.cbITCD.setSelected(false);
                this.cbDAE.setSelected(false);
                this.cbCertQuitacao.setSelected(false);
                this.cbCertNegativa.setSelected(false);
                this.cbTextoPronto.setSelected(false);
                this.cbAssinaturas.setSelected(false);
            }else{ //atualizar
                cbDocumentos.setSelected(protocolo.isRecDocumentos());
                cbITCD.setSelected(protocolo.isEnviaAF());
                cbDAE.setSelected(protocolo.isPgtDAE());
                cbCertQuitacao.setSelected(protocolo.isCertQuitacao());
                cbCertNegativa.setSelected(protocolo.isCertNegativa());
                cbTextoPronto.setSelected(protocolo.isTextoPronto());
                cbAssinaturas.setSelected(protocolo.isAssinaturas());
            }
        }
    }//GEN-LAST:event_cbProntoActionPerformed

    private void txtDataEscrituraKeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_txtDataEscrituraKeyReleased
        // TODO add your handling code here:
    }//GEN-LAST:event_txtDataEscrituraKeyReleased

    private void txtDataEscrituraActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_txtDataEscrituraActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_txtDataEscrituraActionPerformed

    private void txtOrdemServicoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_txtOrdemServicoActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_txtOrdemServicoActionPerformed

    private void txtOrdemServicoKeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_txtOrdemServicoKeyReleased
        // TODO add your handling code here:
    }//GEN-LAST:event_txtOrdemServicoKeyReleased

    private void txtDataKeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_txtDataKeyReleased
        // TODO add your handling code here:
        if (tipo == 0) {//novo
            if (rbInventario.isSelected()) {
                rbInventario.doClick();
            }
            if (rbSobrepartilha.isSelected()) {
                rbSobrepartilha.doClick();
            }
        }

    }//GEN-LAST:event_txtDataKeyReleased

    private void txtDataActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_txtDataActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_txtDataActionPerformed


    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnPesquisar1;
    private javax.swing.JCheckBox cbAssinaturas;
    private javax.swing.JCheckBox cbCertNegativa;
    private javax.swing.JCheckBox cbCertQuitacao;
    private javax.swing.JCheckBox cbCertidao;
    private javax.swing.JCheckBox cbDAE;
    private javax.swing.JCheckBox cbDocumentos;
    private javax.swing.JCheckBox cbEscritura;
    private javax.swing.JCheckBox cbITCD;
    private javax.swing.JCheckBox cbParalizada;
    private javax.swing.JCheckBox cbPeticao;
    private javax.swing.JCheckBox cbPronto;
    private javax.swing.JCheckBox cbTextoPronto;
    private javax.swing.JButton jButton2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel10;
    private javax.swing.JPanel jPanel11;
    private javax.swing.JPanel jPanel12;
    private javax.swing.JPanel jPanel13;
    private javax.swing.JPanel jPanel14;
    private javax.swing.JPanel jPanel15;
    private javax.swing.JPanel jPanel16;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JPanel jPanel3;
    private javax.swing.JPanel jPanel4;
    private javax.swing.JPanel jPanel5;
    private javax.swing.JPanel jPanel6;
    private javax.swing.JPanel jPanel7;
    private javax.swing.JPanel jPanel8;
    private javax.swing.JPanel jPanel9;
    private javax.swing.JLabel lblTipo;
    private javax.swing.JLabel lblTipo1;
    private javax.swing.JLabel lblTipo2;
    private javax.swing.JLabel lblTipo3;
    private javax.swing.JRadioButton rbInventario;
    private javax.swing.JRadioButton rbSobrepartilha;
    private javax.swing.JTextField txtAdvogado;
    private javax.swing.JTextField txtCPFInventariado;
    private javax.swing.JTextField txtCod;
    private javax.swing.JTextField txtCod1;
    private javax.swing.JTextField txtData;
    private javax.swing.JTextField txtDataEscritura;
    private javax.swing.JTextField txtInventariado;
    private javax.swing.JTextField txtInventariante;
    private javax.swing.JTextField txtOrdemServico;
    private javax.swing.JLabel txtRodape;
    private javax.swing.JTextField txtValor;
    // End of variables declaration//GEN-END:variables
}
