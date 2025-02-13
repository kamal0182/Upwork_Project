<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Sidebar -->
        <!-- <div class="fixed inset-y-0 left-0 w-64 bg-blue-600 text-white transition-transform duration-300 transform">
            <div class="p-6">
                <h1 class="text-2xl font-bold mb-8">Dashboard Admin</h1>
                <nav>
                    <a href="#" class="flex items-center p-3 mb-3 rounded hover:bg-blue-700 bg-blue-700">
                        <i class="fas fa-users mr-3"></i>
                        Utilisateurs
                    </a>
                    <a href="/offres" class="flex items-center p-3 mb-3 rounded hover:bg-blue-700">
                        <i class="fas fa-chart-bar mr-3"></i>
                        offres
                    </a>
                    <a href="#" class="flex items-center p-3 mb-3 rounded hover:bg-blue-700">
                        <i class="fas fa-cog mr-3"></i>
                        Paramètres
                    </a>
                </nav>
            </div>
        </div> -->

    <!-- Main Content -->
    <div class="ml-64 p-8">
        <!-- Stats Cards -->
        <!-- <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100 mr-4">
                        <i class="fas fa-users text-blue-500 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Total Utilisateurs</h3>
                        <p class="text-2xl font-bold" id="total-users">0</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-green-500">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 mr-4">
                        <i class="fas fa-star text-green-500 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Rating Moyen</h3>
                        <p class="text-2xl font-bold" id="avg-rating">0</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-purple-500">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-purple-100 mr-4">
                        <i class="fas fa-user-plus text-purple-500 text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-gray-500 text-sm">Nouveaux Utilisateurs</h3>
                        <p class="text-2xl font-bold" id="new-users">0</p>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Search & Filters -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <div class="flex flex-wrap gap-4">
                <div class="flex-1">
                    <div class="relative">
                        <input type="text" id="search" placeholder="Rechercher un utilisateur..." 
                               class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                </div>
                <div class="flex gap-4">
                    <select id="filter_rating" class="rounded-lg border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
                        <option value="">Rating</option>
                        <option value="5">5 étoiles</option>
                        <option value="4">4 étoiles</option>
                        <option value="3">3 étoiles</option>
                    </select>
                    <button id="apply_filters" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition-colors">
                        <i class="fas fa-filter mr-2"></i>Filtrer
                    </button>
                </div>
            </div>
        </div>

        <!-- Users Table -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-xl font-semibold">Liste des Utilisateurs</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <span class="flex items-center cursor-pointer">
                                    ID <i class="fas fa-sort ml-1"></i>
                                </span>
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Utilisateur</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rating</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="users-table-body" class="bg-white divide-y divide-gray-200">
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="bg-gray-50 px-6 py-4 flex items-center justify-between">
                <div class="flex items-center">
                    <span class="text-sm text-gray-700">Affichage de 1-10 sur 50 résultats</span>
                </div>
                <div class="flex gap-2">
                    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">Précédent</button>
                    <button class="px-3 py-1 rounded bg-blue-500 text-white">1</button>
                    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">2</button>
                    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">3</button>
                    <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100">Suivant</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            loadUsers();
            updateStats();

            $('#apply_filters, #search').on('input change', function() {
                loadUsers();
            });

            function updateStats() {
                // Simulé pour l'exemple - à connecter avec backend
                $('#total-users').text('1,234');
                $('#avg-rating').text('4.5');
                $('#new-users').text('28');
            }

            function loadUsers() {
                const searchTerm = $('#search').val();
                const filterRating = $('#filter_rating').val();

                $.ajax({
                    url: 'userController.php',
                    method: 'GET',
                    data: {
                        search: searchTerm,
                        filter_rating: filterRating
                    },
                    success: function(response) {
                        updateTable(response);
                    },
                    error: function(xhr, status, error) {
                        showNotification('Erreur lors du chargement des utilisateurs', 'error');
                    }
                });
            }

            function updateTable(users) {
                const tbody = $('#users-table-body');
                tbody.empty();

                users.forEach(user => {
                    const stars = '⭐'.repeat(Math.round(user.rating));
                    tbody.append(`
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">${user.id}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center">
                                            <i class="fas fa-user text-gray-500"></i>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">${user.first_name} ${user.last_name}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${user.email}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${stars}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-900 delete-user" data-user-id="${user.id}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    `);
                });

                $('.delete-user').click(function() {
                    const userId = $(this).data('user-id');
                    if (confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')) {
                        deleteUser(userId);
                    }
                });
            }

            function deleteUser(userId) {
                $.ajax({
                    url: 'userController.php',
                    method: 'POST',
                    data: { delete_user: userId },
                    success: function(response) {
                        loadUsers();
                        showNotification('Utilisateur supprimé avec succès', 'success');
                    },
                    error: function(xhr, status, error) {
                        showNotification('Erreur lors de la suppression', 'error');
                    }
                });
            }

            function showNotification(message, type) {
                const bgColor = type === 'success' ? 'bg-green-500' : 'bg-red-500';
                const notification = $(`
                    <div class="fixed top-4 right-4 ${bgColor} text-white px-6 py-3 rounded-lg shadow-lg transition-opacity duration-500">
                        ${message}
                    </div>
                `);
                $('body').append(notification);
                setTimeout(() => {
                    notification.fadeOut(() => notification.remove());
                }, 3000);
            }
        });
    </script>
</body>
</html>