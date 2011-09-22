package com.site.twitevent.server.domain;

public class Senha {
	
	private String senha;
	
	public Senha(String senha) {
		setSenha(senha);
	}
	
	public void setSenha(String senha) {
		this.senha = senha;
	}
	
	public boolean isSenhaCorreta(String senha) {
		return this.senha.equals(senha);
	}
}