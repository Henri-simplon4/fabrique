<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="{{url('admin/assets/css/bootstrap4.min.css')}}"  />
</head>
<body>
<section>
<div class="container-fluid">
    <div class="card-container w-100">
      <h2 class='mb-3 text-center'>LISTE DES APPRENANTS</h2>
      <table id="dtBasicExample" class="table table-striped table-hover pt-3" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Mail</th>
          </tr>
        </thead>
        <!-- ... Votre en-tête de tableau ... -->
<tbody>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetch('http://127.0.0.1:8000/api/lister-etudiant') // Remplacez l'URL par l'URL de votre API
            .then(response => response.json())
                .then(data => {
                    const tbody = document.querySelector('tbody');

                    data.forEach(apprenant => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${apprenant.id}</td>
                            <td>${apprenant.nom}</td>
                            <td>${apprenant.prenom}</td>
                            <td>${apprenant.mail}</td>
                        `;
                        tbody.appendChild(row);
                       
                    });
                })
                .catch(error => console.error('Erreur de requête : ', error));
        });
    </script>
</tbody>

      </table>
    </div>
  </div>
</section>
</body>
</html>