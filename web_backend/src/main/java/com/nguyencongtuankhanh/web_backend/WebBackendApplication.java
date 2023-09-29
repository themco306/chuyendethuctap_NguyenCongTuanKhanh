package com.nguyencongtuankhanh.web_backend;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.transaction.annotation.EnableTransactionManagement;



@SpringBootApplication
@EnableTransactionManagement
public class WebBackendApplication {

	public static void main(String[] args) {
		SpringApplication.run(WebBackendApplication.class, args);

	}

}
