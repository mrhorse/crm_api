# CRM API composer package

This is library for interacting with ThankQ CRM via an intermediate wrapper. php2wsdl has been used to transpose the XML-based SOAP actions in to a php adaptor. The resulting structure is generated in the folder `Api` and is untouched _except_ for the removal of the WSDL file for security.
 
The library relies heavily on services (DI via Symfony2 component) due to the library's many cross dependencies. 


## Available services

### Lookup

- Perform operations based on the lookup table.

### Contact

- Primary storage of member data, including personal deets, address, attributes and data protections.
- For insert / update operations please check `Services\Contact\Base.php` for a list of input field keys, along with each field's corresponding wrapper classes and methods, as well as the input data validation functions.


## Usage

Assumed to be required by composer and installed by this point.




````
    /** @var ContainerManager $containerManager */
    $containerManager = new Torchbox\Thankq\ContainerManager();
    $this->container = $containerManager->getContainer();

    // Set our soap params on the container to retrieve later. Change soap options to whatever you want.
    $this->container->setParameter('soap.options', array('trace' => TRUE, 'compression' => TRUE));
    $this->container->setParameter('soap.wsdl', <PATH/TO/WSDL>');

````

