package com.nguyencongtuankhanh.web_backend.exception;

import org.springframework.http.HttpStatus;
import org.springframework.web.bind.annotation.ResponseStatus;

@ResponseStatus(HttpStatus.BAD_REQUEST)
public class ProductException extends RuntimeException{
    public ProductException(String mesage){
        super(mesage);
    }
}
