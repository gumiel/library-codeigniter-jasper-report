# Libreria para codeigniter de Jasper Reports

Esta es una libreria que tengo en mis repositorio y lo integre con codeigniter para que puedan directamente usarlos en cualquier proyecto de codeigniter. Es una libreria secilla y rapida de usar compila los jrxml en el MVC de codeigniter.

Para hacer correr el ejemplo ingresar a la url http://localhost/codeigniter_jasper/index.php/ejemploJasper/creandoPdf

En caso que muestre un error Ejm. "Message: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found"

  Podria agregar 

if ($returnVar !== 0) {
      echo $returnVar.'---'.$this->command; // NUEVA LINEA
      throw new \PHPJasper\Exception\ErrorCommandExecutable();
  }

Esto ayudara a ver el comando que despliega la libreria para la creacion del reporte. Ejm

>block quote

    -jasperstarter --locale en process "C:\xampp\htdocs\codeigniter_jasper\jasper_jrxml\prueba1.jasper" -o "C:\xampp\htdocs\codeigniter_jasper\temp_reports\report_20191017112124_5da8db54aeba6" -f pdf -P id="221" -t postgres -u postgres -p postgres -H localhost -n phpjasperreport --db-port 5432

----

Este comando lo puedes ejecutar por consola y ver a detalle el error de jasper report

# Requisitos

- Utilizar Codeigniter 3.X 

- PHP 5.6 o superior tener instalado 

- Java JDK 8 tener instalado tambien se puede usar JDK7 pero no se realizaron pruebas

Se realizaron pruebas con bajo estas condiciones. Puede que con otras versiones funcionen pero no fueron probadas.
