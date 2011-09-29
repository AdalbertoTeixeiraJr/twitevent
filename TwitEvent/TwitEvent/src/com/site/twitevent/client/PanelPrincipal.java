package com.site.twitevent.client;

import com.google.gwt.core.client.GWT;
import com.google.gwt.event.dom.client.ClickEvent;
import com.google.gwt.event.dom.client.ClickHandler;
import com.google.gwt.user.client.rpc.AsyncCallback;
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
import com.site.twitevent.shared.User;

public class PanelPrincipal extends Composite {
	
	private TwitterUserServiceAsync twitterUserSvc = GWT.create(TwitterUserService.class);
	
	public PanelPrincipal() {
		VerticalPanel panelPrincipal = new VerticalPanel();
		
		panelPrincipal.add(getLoginPanel());
		
		initWidget(panelPrincipal);
	}
	
	private VerticalPanel getLoginPanel() {
		VerticalPanel loginPanel = new VerticalPanel();
		FlexTable loginFlexTable = new FlexTable();
		
		final HTML warningHml = new HTML();
		final TextBox emailTextBox = new TextBox();
		final PasswordTextBox passwordTextBox = new PasswordTextBox();
		Anchor signInLabel = new Anchor("Cadastre-se");
		Button loginButton = new Button("Entrar", new ClickHandler() {
			
			@Override
			public void onClick(ClickEvent event) {
				warningHml.setHTML("");
				twitterUserSvc.selectUser(emailTextBox.getText(), new AsyncCallback<User>() {
					
					@Override
					public void onSuccess(User result) {
						if (result != null && result.verifyPassword(passwordTextBox.getText()))
							warningHml.setHTML(result.getEmail() + " logado!");
						else {
							warningHml.setHTML("Email e Senha não conferem");
						}
					}
					
					@Override
					public void onFailure(Throwable caught) {
						System.err.println("ERRO!");
					}
				});
			}
		});
		
		loginFlexTable.setText(0, 0, "Usuário");
		loginFlexTable.setText(0, 1, "Senha");
		loginFlexTable.setWidget(1, 0, emailTextBox);
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
		
		loginPanel.add(warningHml);
		loginPanel.add(loginFlexTable);
		loginPanel.add(signInLabel);
		
		return loginPanel;
	}
	
	private DialogBox getSignInDialogBox() {
		final DialogBox signInDialogBox = new DialogBox();
		VerticalPanel signInPanel = new VerticalPanel();
		HorizontalPanel buttonsPanel = new HorizontalPanel();
		
		Label emailLabel = new Label("Email"), 
				passwordLabel = new Label("Senha");
		final HTML warningHml = new HTML();
		final TextBox emailTextBox = new TextBox();
		final PasswordTextBox passwordTextBox = new PasswordTextBox();
		
		Button cancelButton = new Button("Cancelar", new ClickHandler() {
			
			@Override
			public void onClick(ClickEvent event) {
				signInDialogBox.hide();
			}
		});
		final Button signInButon = new Button("Cadastrar", new ClickHandler() {
			
			@Override
			public void onClick(ClickEvent event) {
				warningHml.setHTML("");
				final User user = new User(emailTextBox.getText(), passwordTextBox.getText());
				twitterUserSvc.insertUser(user, new AsyncCallback<Boolean>() {
					@Override
					public void onSuccess(Boolean result) {
						if (!result)
							warningHml.setHTML("O email " + user.getEmail() + " não esta disponível para cadastro");
						else
							signInDialogBox.hide();
					}
					
					@Override
					public void onFailure(Throwable caught) {
						System.err.println("ERRO!");
					}
				});
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
		signInPanel.add(buttonsPanel);
		
		return signInDialogBox;
	}
}