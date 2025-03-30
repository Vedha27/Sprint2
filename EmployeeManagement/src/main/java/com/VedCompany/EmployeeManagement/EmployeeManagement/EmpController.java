package com.VedCompany.EmployeeManagement.EmployeeManagement;

import java.util.ArrayList;

import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;
@RestController
public class EmpController {

	ArrayList<Employee> empList=new ArrayList<Employee>();

	public EmpController() {
		empList.add(new Employee(101,"Vedha","9234567891",20000));
		empList.add(new Employee(102,"Suresh","8236678923",25000));
		empList.add(new Employee(103,"Revathi","9134867801",27000));
				
		}
	
	@GetMapping("/employee")
	public ArrayList<Employee> getEmployee(){
		
		return empList;
	}
	
	@GetMapping("/employee/{id}")
	public Employee getEmployee(@PathVariable int id)
	{
		for(Employee e:empList)
		{
			if(e.getId()==id)
			{
				return e;
			}
			
		}
		return null;
	}
	@PostMapping("/employee")
	public Employee createEmployee(@RequestBody Employee emp)
	{
		empList.add(emp);
		return emp;
	}
	@PutMapping("/employee/{id}")
	public Employee updateEmployee(@RequestBody Employee emp,@PathVariable int id) {

		for(Employee e:empList)
		{
			if(e.getId()==id)
			{
				e.setId(id);
				e.setName(emp.getName());
				e.setSalalry(emp.getSalalry());
				e.setPhone(emp.getPhone());
			}
		}
		return emp;
			
	    }
	 @DeleteMapping("/employee/{id}")
	 public String updateEmployee(@PathVariable int id) {

		for(Employee e:empList)
		{
			if(e.getId()==id)
			{
				empList.remove(e);
			}
		}
		return "Employee Deleted";
       }
}
