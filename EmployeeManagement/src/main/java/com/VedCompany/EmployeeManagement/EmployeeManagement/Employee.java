package com.VedCompany.EmployeeManagement.EmployeeManagement;
public class Employee {

	int id;
	String Name;
	String phone;
	double salalry;
	
	public Employee() {
		super();
	}
    public Employee(int id, String name, String phone, double salalry) {
		super();
		this.id = id;
		Name = name;
		this.phone = phone;
		this.salalry = salalry;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getName() {
		return Name;
	}

	public void setName(String name) {
		Name = name;
	}

	public String getPhone() {
		return phone;
	}

	public void setPhone(String phone) {
		this.phone = phone;
	}

	public double getSalalry() {
		return salalry;
	}

	public void setSalalry(double salalry) {
		this.salalry = salalry;
	}
	}
