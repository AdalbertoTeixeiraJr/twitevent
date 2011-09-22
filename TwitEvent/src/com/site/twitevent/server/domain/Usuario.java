package com.site.twitevent.server.domain;

public class Usuario {
	private String usuario;
	private Senha senha;
	
	public Usuario(String usuario, String senha) {
		setUsuario(usuario);
		mudarSenha(null, senha);
	}
	
	public void setUsuario(String usuario) {
		this.usuario = usuario;
	}
	
	public boolean mudarSenha(String senhaAntiga, String senhaNova) {
		if (senha == null || senha.isSenhaCorreta(senhaAntiga)) {
			senha = new Senha(senhaNova);
			return true;
		}
		
		return false;
	}
	
	public String getUsuario() {
		return usuario;
	}
}