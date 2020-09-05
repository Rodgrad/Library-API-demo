# Library-API-demo
Demo API providing informations about books.

This is demo API to serach bood data like number of pages isbn code or author.

***********************************************************************************************************************
!NOTE 
Link bellow do not support CORS because it is hosted on shared hosting, to test API you will need to download code and host it in your local enviroment.

http://exampletemplates.epizy.com/

What a disappointment, I couldn't find a good host with free plan for demo. Maybe in the future.

!READ A NOTE
***********************************************************************************************************************


# Separation of concerns


  ## Public side
  
    WEBpage files are in root folder   

    -get API key
    -Test Service on our site
  
  
  -API access files:  code snipets for users interaction with private service are located in folder /userUI/
    
    Supported languages are:

      -JavaScript
      -Python
      -PHP
        
  
  ## Private side
  
  -Request handler files are in folder /view/
  
      -Search procedure

  
  -Service files are located in folder config/
  
    -API key procedure
    -db connection (not included)
  
  
  -Resource files are in folder RESOURCES/
  
    -db import
    -data 
    
    

# Test in local enviroment
  
  run settings.py or settings.php in shell or use index.php from browser.
  
# Response data 

  Response data is in JSON format.
    
    

    
    
  
