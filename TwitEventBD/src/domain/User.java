package domain;

public class User {
	
	private String email, password;
	
	public User(String email, String password) {
		setEmail(email);
		changePassword(password);
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
	
	public boolean changePassword(String newPassword) {
		if (getPassword() == null || getPassword().equals(newPassword)) {
			setPassword(newPassword);
			return true;
		}
		
		return false;
	}
	
	@Override
	public String toString() {
		return getEmail() + " " + getPassword();
	}
}