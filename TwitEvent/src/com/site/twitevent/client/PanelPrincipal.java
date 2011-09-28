package com.site.twitevent.client;

import com.google.gwt.event.dom.client.ClickEvent;
import com.google.gwt.event.dom.client.ClickHandler;
import com.google.gwt.user.client.ui.Anchor;
import com.google.gwt.user.client.ui.Button;
import com.google.gwt.user.client.ui.Composite;
import com.google.gwt.user.client.ui.DialogBox;
import com.google.gwt.user.client.ui.FlexTable;
import com.google.gwt.user.client.ui.HTML;
import com.google.gwt.user.client.ui.HorizontalPanel;
import com.google.gwt.user.client.ui.Label;
import com.google.gwt.user.client.ui.PasswordTextBox;
import com.google.gwt.user.client.ui.TextBox;
import com.google.gwt.user.client.ui.VerticalPanel;
import com.site.twitevent.client.verifier.FieldVerifier;

public class PanelPrincipal extends Composite {
	
//	private StockPriceServiceAsync stockPriceSvc = GWT.create(StockPriceService.class);
	
	public PanelPrincipal() {
		VerticalPanel panelPrincipal = new VerticalPanel();
		
		panelPrincipal.add(getLoginPanel());
		
		initWidget(panelPrincipal);
	}
	
	private VerticalPanel getLoginPanel() {
		VerticalPanel loginPanel = new VerticalPanel();
		FlexTable loginFlexTable = new FlexTable();
		
		TextBox usernameTextBox = new TextBox();
		PasswordTextBox passwordTextBox = new PasswordTextBox();
		Button loginButton = new Button("Entrar");
		Anchor signInLabel = new Anchor("Cadastre-se");
		
		loginFlexTable.setText(0, 0, "Usuário");
		loginFlexTable.setText(0, 1, "Senha");
		loginFlexTable.setWidget(1, 0, usernameTextBox);
		loginFlexTable.setWidget(1, 1, passwordTextBox);
		loginFlexTable.setWidget(1, 2, loginButton);
		
		signInLabel.addClickHandler(new ClickHandler() {
			
			@Override
			public void onClick(ClickEvent event) {
				final DialogBox signInDialogBox = getSignInDialogBox();
				signInDialogBox.setGlassEnabled(true);
				signInDialogBox.setAnimationEnabled(true);
				signInDialogBox.center();
				signInDialogBox.show();
			}
		});
		
		loginPanel.add(loginFlexTable);
		loginPanel.add(signInLabel);
		
		return loginPanel;
	}
	
	private DialogBox getSignInDialogBox() {
		final DialogBox signInDialogBox = new DialogBox();
		VerticalPanel signInPanel = new VerticalPanel();
		HorizontalPanel buttonsPanel = new HorizontalPanel();
		
		Label emailLabel = new Label("Email"), 
				passwordLabel = new Label("Senha"), 
				rePasswordLabel = new Label("Redigite a senha");
		final HTML warningHml = new HTML();
		final TextBox emailTextBox = new TextBox();
		final PasswordTextBox passwordTextBox = new PasswordTextBox();
		final PasswordTextBox rePasswordTextBox = new PasswordTextBox();
		Button cancelButton = new Button("Cancelar", new ClickHandler() {
			
			@Override
			public void onClick(ClickEvent event) {
				signInDialogBox.hide();
			}
		}), signInButon = new Button("Cadastrar", new ClickHandler() {
			
			@Override
			public void onClick(ClickEvent event) {
				warningHml.setHTML("");
				if (!FieldVerifier.isValidMail(emailTextBox.getText()))
					warningHml.setHTML(warningHml.getHTML() + "O email possui um formato inválido!<br />");
				if (!FieldVerifier.isPasswordsEqual(passwordTextBox.getText(), rePasswordTextBox.getText())) {
					warningHml.setHTML(warningHml.getHTML() + "A senha não confere!");
				}
			}
		});
		
		signInDialogBox.setWidget(signInPanel);
		signInDialogBox.setText("Cadastro");
		
		buttonsPanel.add(cancelButton);
		buttonsPanel.add(signInButon);
		
		signInPanel.add(warningHml);
		signInPanel.add(emailLabel);
		signInPanel.add(emailTextBox);
		signInPanel.add(passwordLabel);
		signInPanel.add(passwordTextBox);
		signInPanel.add(rePasswordLabel);
		signInPanel.add(rePasswordTextBox);
		signInPanel.add(buttonsPanel);
		
		return signInDialogBox;
	}
}