<!DOCTYPE html>
<html lang="en">
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
        <div class="fixed inset-y-0 left-0 w-64 bg-blue-600 text-white transition-transform duration-300 transform">
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
        </div>

    <!-- Main Content -->
    <div class="ml-64 p-8">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
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
        </div>


{{Content}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
