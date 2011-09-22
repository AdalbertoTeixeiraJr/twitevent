package com.site.twitevent.server.persistence;

import java.sql.SQLException;

import com.site.twitevent.server.domain.Usuario;

public interface UsuarioDAO {
	public Usuario getUsuario(String usuario) throws SQLException;
}