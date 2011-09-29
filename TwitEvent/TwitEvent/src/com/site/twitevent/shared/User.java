package com.site.twitevent.shared;

import java.io.Serializable;

public class User implements Serializable {
	
	private static final long serialVersionUID = 1L;
	private String email, password = "";
	
	public User() {
	}
	
	public User(String email, String password) {
		setEmail(email);
		changePassword("", password);
	}
	
	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}
	
	public String getPassword() {
		return password;
	}
	
	public void setPassword(String password) {
		this.password = password;
	}
	
	public boolean changePassword(String oldPassword, String newPassword) {
		if (verifyPassword(oldPassword)) {
			setPassword(newPassword);
			return true;
		}
		
		return false;
	}
	
	public boolean verifyPassword(String password) {
		if (getPassword().equals(password))
			return true;
		
		return false;
	}
	
	@Override
	public String toString() {
		return getEmail() + " " + getPassword();
	}
}