package com.site.twitevent.server.domain;

public class User {
	private String login;
	private Password password;
	
	public User(String login, String password) {
		setLogin(login);
		changePassword("", password);
	}
	
	public void setLogin(String login) {
		this.login = login;
	}
	
	public boolean confirmPassword(String password) {
		if (password == null)
			return true;
		
		return this.password.confirmPassword(password);
	}
	
	public boolean changePassword(String oldPassword, String newPassword) {
		if (!confirmPassword(oldPassword))
			return false;
		
		password = new Password(newPassword);
		return true;
	}
	
	public String getUsuario() {
		return login;
	}
}