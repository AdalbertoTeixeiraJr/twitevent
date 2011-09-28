package com.site.twitevent.client.atomic;

public class Boolean {
	
	private boolean value;
	
	public Boolean(boolean value) {
		setValue(value);
	}
	
	public Boolean() {
		this(false);
	}
	
	public void setValue(boolean value) {
		this.value = value;
	}
	
	public boolean getValue() {
		return value;
	}
}