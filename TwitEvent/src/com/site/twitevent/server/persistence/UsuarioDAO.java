package com.site.twitevent.server.persistence;

import java.sql.SQLException;

import com.site.twitevent.server.domain.User;

public interface UsuarioDAO {
	public User getUsuario(String usuario) throws SQLException;
}