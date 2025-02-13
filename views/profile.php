<!-- Main Container -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
    
<div class="min-h-screen bg-gray-100">
    <!-- Header Section -->
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8 flex justify-between items-center">
            <div class="flex items-center space-x-8">
                <img src="{{ company.logo|default('/images/logo.png') }}" alt="Logo" class="h-12 w-auto">
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-700 hover:text-blue-600">Accueil</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">Services</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">Portfolio</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600">Contact</a>
                </nav>
            </div>
            <button class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition-colors">
                Contact
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-800 to-blue-900 text-white">
        <div class="max-w-7xl mx-auto px-4 py-20 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl font-bold mb-6">{{ user.name|default('Votre Nom') }}</h1>
                    <p class="text-2xl text-blue-200 mb-4">{{ user.title|default('Expert Digital') }}</p>
                    <p class="text-lg text-gray-300 mb-8">{{ user.description|default('Plus de 10 ans d\'expérience dans le développement web et la transformation digitale.') }}</p>
                    <div class="flex space-x-4">
                        <a href="#contact" class="bg-white text-blue-900 px-8 py-3 rounded-md font-semibold hover:bg-gray-100 transition-colors">
                            Contactez-moi
                        </a>
                        <a href="#portfolio" class="border-2 border-white text-white px-8 py-3 rounded-md font-semibold hover:bg-white hover:text-blue-900 transition-colors">
                            Portfolio
                        </a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <img src="{{ user.profile_image|default('/images/profile.jpg') }}" alt="Profile" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-white" id="services">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Nos Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {% for service in services|default([
                    {title: 'Développement Web', icon: 'code', description: 'Création de sites web modernes et responsives'},
                    {title: 'Design UI/UX', icon: 'palette', description: 'Design d\'interfaces utilisateur intuitives'},
                    {title: 'Consulting', icon: 'chart', description: 'Conseil en transformation digitale'}
                ]) %}
                <div class="bg-gray-50 p-8 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <i class="text-blue-600 text-xl {{ service.icon }}"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">{{ service.title }}</h3>
                    <p class="text-gray-600">{{ service.description }}</p>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="py-20 bg-gray-50" id="portfolio">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Portfolio</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {% for project in projects|default([
                    {title: 'E-commerce', image: '/images/project1.jpg', category: 'Web Development'},
                    {title: 'Application Mobile', image: '/images/project2.jpg', category: 'Mobile'},
                    {title: 'Dashboard', image: '/images/project3.jpg', category: 'UI/UX'}
                ]) %}
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <img src="{{ project.image }}" alt="{{ project.title }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-blue-600 text-sm font-semibold">{{ project.category }}</span>
                        <h3 class="text-xl font-semibold mt-2">{{ project.title }}</h3>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-white" id="contact">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12">Contactez-nous</h2>
            <div class="max-w-3xl mx-auto">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 mb-2">Nom</label>
                            <input type="text" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Message</label>
                        <textarea rows="4" class="w-full px-4 py-3 rounded-md border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition-colors">
                        Envoyer
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <img src="{{ company.logo|default('/images/logo-white.png') }}" alt="Logo" class="h-8 w-auto mb-4">
                    <p class="text-gray-400">{{ company.description|default('Votre partenaire digital de confiance.') }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>{{ contact.address|default('123 Rue Example') }}</li>
                        <li>{{ contact.phone|default('+212 5XX-XXXXXX') }}</li>
                        <li>{{ contact.email|default('contact@example.com') }}</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens Rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Accueil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Services</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Portfolio</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Suivez-nous</h3>
                    <div class="flex space-x-4">
                        {% if social.linkedin %}
                        <a href="{{ social.linkedin }}" class="text-gray-400 hover:text-white">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        {% endif %}
                        {% if social.github %}
                        <a href="{{ social.github }}" class="text-gray-400 hover:text-white">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        {% endif %}
                        {% if social.twitter %}
                        <a href="{{ social.twitter }}" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        {% endif %}
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; {{ "now"|date("Y") }} {{ company.name|default('Votre Entreprise') }}. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</div>

</body>
</html>