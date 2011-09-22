package com.site.twitevent.server.domain;

public class Password {
	
	private String password;
	
	public Password(String password) {
		setPassword(password);
	}
	
	public void setPassword(String password) {
		this.password = password;
	}
	
	public boolean confirmPassword(String password) {
		return this.password.equals(password);
	}
}