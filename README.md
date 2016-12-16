# CRM API composer package

This is library for interacting with ThankQ CRM via an intermediate wrapper. php2wsdl has been used to transpose the XML-based SOAP actions in to a php adaptor. The resulting structure is generated in the folder `Api` and is untouched _except_ for the removal of the WSDL file for security.
 
The library relies heavily on services (DI via Symfony2 component) due to the library's many cross dependencies. 


## Available services

### Lookup

- Perform operations based on the lookup table.
- The methods retrieve values from the lookups according to our case uses, these will probably need to be adjusted if this is used in any other projects.

### Contact

- Primary storage of member data, including personal deets, address, attributes and data protections.
- For insert / update operations please check `Services\Contact\Base.php` for a list of input field keys, along with each field's corresponding wrapper classes and methods, as well as the input data validation functions.


## Usage

Assumed to be required by composer and installed by this point, e.g.:
````
"require": {
	  "torchbox/thankq": "dev-master"
    },
   "repositories": [
     {
      "type": "git",
      "url": "https://github.com/mrhorse/crm_api"
     }
    ]
````

Then in your app:


````
    /** @var ContainerManager $containerManager */
    $containerManager = new Torchbox\Thankq\ContainerManager();
    $this->container = $containerManager->getContainer();

    // Set our soap params on the container to retrieve later. Change soap options to whatever you want.
    $this->container->setParameter('soap.options', array('trace' => TRUE, 'compression' => TRUE));
    $this->container->setParameter('soap.wsdl', <PATH/TO/WSDL>');

````

With the container you can now access the available services as outlined above, check `services.yml` for our 

## Error handling

Custom Exception classes bubble up and are caught by the standard Exception class - calling `$e->getPrevious()` on `\Exception` in your app will allow you to gracefully deal with any error. `\SoapFault` exception must also be handled in your app as appropriate.  