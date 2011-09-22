package com.site.twitevent.server.persistence;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import com.site.twitevent.server.domain.User;

public class DatabaseControl implements UsuarioDAO {
	
	private static DatabaseControl instance;

    public final String driver = "org.postgresql.Driver";
    private final String postgres = "jdbc:postgresql:";

    public static final String INSERT_CRIME = "INSERT INTO Crime(tipo,descricao,horario,data,the_geom) VALUES (?,?,?,?,ST_GeomFromText(?, 29195));";
    public static final String INSERT_DELEGACIA = "INSERT INTO Delegacia(id, unidade, delegado, contingente, infoAdicionais, the_geom) VALUES(DEFAULT,?,?,?,?,ST_GeomFromText(?, 29195));";
    public static final String INSERT_VIATURA = "INSERT INTO Viatura(id, delegacia, id_radio, infoAdicionais, the_geom) VALUES(DEFAULT,?,?,?,ST_GeomFromText(?, 29195));";
    
    public static final String SELECT_ALLCRIME = "SELECT * FROM Crime;";
    public static final String SELECT_ALLDELEGACIA = "SELECT * FROM View_Delegacia;";
    public static final String SELECT_ALLVIATURA = "SELECT * FROM Viatura;";
    
    public static final String SELECT_CRIME = "SELECT * FROM Crime WHERE id = ?;";
    public static final String SELECT_DELEGACIA = "SELECT * FROM View_Delegacia WHERE id = ?;";
    public static final String SELECT_VIATURA = "SELECT * FROM Viatura WHERE id = ?;";
    
    
    
    public static final String CONSULTA_UM = "SELECT * FROM Consulta_Um(?, ?);";
    public static final String CONSULTA_DOIS = "SELECT * FROM Consulta_Dois;";
    public static final String CONSULTA_QUATRO = "SELECT * FROM Consulta_Quatro;";
    public static final String CONSULTA_SEIS = "SELECT * FROM Consulta_Seis;";
    
    
    public static final String SELECT_USUARIO = "SELECT * FROM \"Usuario\" WHERE usuario = ?;";
    
    private String database = "twitevent";
    private String username = "postgres";
    private String password = "1";
    private String host = "//localhost";
    private String port = "5432";
    Connection con;
	
	private DatabaseControl() throws ClassNotFoundException, SQLException {
	    Class.forName(driver);
	    
	    con = DriverManager.getConnection(this.postgres + this.host + ":" + this.port + "/" + this.database, this.username, this.password);
	}
	
	@Override
	public User getUsuario(String usuario) throws SQLException {
		String var_usuario = "", senha = "";
		
		PreparedStatement s = con.prepareStatement(SELECT_USUARIO);
		s.setString(1, usuario);
		ResultSet rs = s.executeQuery();
		
		while (rs.next()) {
			var_usuario = rs.getString("usuario");
			senha = rs.getString("senha");
		}
		
		if (var_usuario == "")
			return null;
		return new User(var_usuario, senha);
	}
	
	public static void main(String[] args) throws ClassNotFoundException, SQLException {
		DatabaseControl db = new DatabaseControl();
		User a = db.getUsuario("Andre");
		System.out.println(a.getUsuario());
		System.out.println(a.changePassword("", "123"));
		System.out.println(a.changePassword("123", "a"));
		System.out.println(a.changePassword("a", "a"));
	}
}