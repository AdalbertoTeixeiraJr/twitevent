package com.site.twitevent.client;

import com.extjs.gxt.ui.client.event.WidgetListener;
import com.extjs.gxt.ui.client.widget.Composite;
import com.extjs.gxt.ui.client.widget.Label;
import com.extjs.gxt.ui.client.widget.VerticalPanel;
import com.google.gwt.event.dom.client.ClickEvent;
import com.google.gwt.event.dom.client.ClickHandler;
import com.google.gwt.user.client.ui.FlexTable;
import com.google.gwt.user.client.ui.Image;
import com.google.gwt.user.client.ui.PasswordTextBox;
import com.google.gwt.user.client.ui.TextBox;
import com.google.gwt.user.client.ui.Button;

public class PanelPrincipal extends Composite {
	
	private TextBox usuarioTextBox = new TextBox();
	private PasswordTextBox passwordPassTextBox = new PasswordTextBox();
	private Button loginButton = new Button("Login");
	
	private Label avisoLabel = new Label();
	
	public PanelPrincipal() {
		VerticalPanel panelPrincipal = new VerticalPanel();
		panelPrincipal.add(new Image("imgs\\logo.png"));
		
		FlexTable loginFlexTable = new FlexTable();
		
		loginButton.addClickHandler(new ClickHandler() {
			
			@Override
			public void onClick(ClickEvent event) {
				avisoLabel.setText(usuarioTextBox.getText() + " " + passwordPassTextBox.getText());
				
			}
		});
		
		loginFlexTable.setText(0, 0, "Usuario");
		loginFlexTable.setText(0, 1, "Senha");
		loginFlexTable.setWidget(1, 0, usuarioTextBox);
		loginFlexTable.setWidget(1, 1, passwordPassTextBox);
		loginFlexTable.setWidget(1, 2, loginButton);
		
		panelPrincipal.add(avisoLabel);
		panelPrincipal.add(loginFlexTable);
		
		initComponent(panelPrincipal);
	}

}