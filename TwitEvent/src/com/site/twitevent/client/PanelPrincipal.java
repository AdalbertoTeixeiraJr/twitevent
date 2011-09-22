package com.site.twitevent.client;

import com.extjs.gxt.ui.client.widget.Composite;
import com.extjs.gxt.ui.client.widget.Label;
import com.extjs.gxt.ui.client.widget.VerticalPanel;
import com.google.gwt.core.client.GWT;
import com.google.gwt.event.dom.client.ClickEvent;
import com.google.gwt.event.dom.client.ClickHandler;
import com.google.gwt.user.client.ui.Button;
import com.google.gwt.user.client.ui.FlexTable;
import com.google.gwt.user.client.ui.PasswordTextBox;
import com.google.gwt.user.client.ui.TextBox;

public class PanelPrincipal extends Composite {
	
	private TwitEventServiceAsync twitEventSvc = GWT.create(TwitEventService.class);
	
	public PanelPrincipal() {
		VerticalPanel panelPrincipal = new VerticalPanel();
//		panelPrincipal.add(new Image("imgs\\logo.png"));
		
		panelPrincipal.add(getLoginPanel());
		
		initComponent(panelPrincipal);
	}
	
	private VerticalPanel getLoginPanel() {
		VerticalPanel loginPanel = new VerticalPanel();
		FlexTable loginFlexTable = new FlexTable();
		final TextBox usuarioTextBox = new TextBox();
		final PasswordTextBox senhaPasswordTextBox = new PasswordTextBox();
		Button loginButton = new Button("Login");
		final Label avisoLabel = new Label("Avisos aqui"),
				cadastrarLabel = new Label("N&atilde;o &eacute; cadastrado, clique aqui.");
		
		loginButton.addClickHandler(new ClickHandler() {
			@Override
			public void onClick(ClickEvent event) {
				avisoLabel.setText(usuarioTextBox.getText() + " " + senhaPasswordTextBox.getText());
			}
		});
		
		usuarioTextBox.setHeight("16px");
		usuarioTextBox.setWidth("100px");
		senhaPasswordTextBox.setWidth("100px");
		
		loginFlexTable.setText(0, 0, "Usuario");
		loginFlexTable.setText(0, 1, "Senha");
		loginFlexTable.setWidget(1, 0, usuarioTextBox);
		loginFlexTable.setWidget(1, 1, senhaPasswordTextBox);
		loginFlexTable.setWidget(1, 2, loginButton);
		
		loginPanel.add(avisoLabel);
		loginPanel.add(loginFlexTable);
		loginPanel.add(cadastrarLabel);
		
		return loginPanel;
	}

}