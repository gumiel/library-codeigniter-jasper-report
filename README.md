# Libreria para codeigniter de Jasper Reports
Esta es una libreria que tengo en mis repositorio y lo integre con codeigniter para que puedan directamente usarlos en cualquier proyecto de codeigniter. Es una libreria secilla y rapida de usar. Solo requiere: Version php 7 o superiores Java para compilar los jrxml Y el MVC de codeigniter<br>
<br>
Para hacer correr el ejemplo ingresar a la url http://localhost/codeigniter_jasper/index.php/ejemploJasper/creandoPdf<br>
- En caso que muestre un error Ejm. "Message: Class 'PHPJasper\Exception\ErrorCommandExecutable' not found"<br>
  Podria agregar 
  if ($returnVar !== 0) {
      echo $returnVar.'---'.$this->command; // NUEVA LINEA
      throw new \PHPJasper\Exception\ErrorCommandExecutable();
  }
<br>
Esto ayudara a ver el comando que despliega la libreria para la creacion del reporte. Ejm<br>
-jasperstarter --locale en process "C:\xampp\htdocs\codeigniter_jasper\jasper_jrxml\prueba1.jasper" -o "C:\xampp\htdocs\codeigniter_jasper\temp_reports\report_20191017112124_5da8db54aeba6" -f pdf -P id="221" -t postgres -u postgres -p postgres -H localhost -n phpjasperreport --db-port 5432 <br>
Este comando lo puedes ejecutar por consola y ver a detalle el error de jasper report
