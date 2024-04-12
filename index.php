<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Número Cliente</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>Dirección</th>
            <th>Municipio</th>
            <th>Código Postal</th>
            <th>Provincia</th>
        </tr>

        <?php
            // Mostrar los datos en la tabla
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['NumeroCliente']}</td>
                            <td>{$row['Nombre']}</td>
                            <td>{$row['Apellidos']}</td>
                            <td>{$row['DNI']}</td>
                            <td>{$row['Direccion']}</td>
                            <td>{$row['Municipio']}</td>
                            <td>{$row['CodigoPostal']}</td>
                            <td>{$row['Provincia']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No hay datos disponibles</td></tr>";
            }

            // Cerrar la conexión
            $conn->close();
        ?>
    </table>

</body>
</html>
