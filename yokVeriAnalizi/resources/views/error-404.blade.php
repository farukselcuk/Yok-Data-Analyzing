<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasarım Desenleri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .pattern-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .pattern-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .pattern-title {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        .pattern-category {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9em;
            margin-bottom: 15px;
        }

        .pattern-description {
            font-size: 1em;
            color: #555;
            margin-bottom: 15px;
        }

        .pattern-locations h4 {
            margin-bottom: 5px;
            font-size: 1em;
            color: #333;
        }

        .pattern-locations ul {
            padding-left: 20px;
            margin: 0;
            list-style-type: disc;
        }

        .pattern-locations li {
            font-size: 0.95em;
            color: #555;
            margin-bottom: 5px;
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Tasarım Desenleri</h1>
    </header>

    <div class="container">
        <!-- Patterns -->
        <div class="pattern-card">
            <h2 class="pattern-title">MVC Pattern</h2>
            <span class="pattern-category">En Yaygın</span>
            <p class="pattern-description">
                Uygulamayı Model, View ve Controller katmanlarına ayırarak sorumlulukları bölen kalıp.
            </p>
            <div class="pattern-locations">
                <h4>Kullanıldığı Yerler:</h4>
                <ul>
                    <li>Controllers/</li>
                    <li>Views/</li>
                    <li>Models/</li>
                </ul>
            </div>
        </div>

        <div class="pattern-card">
            <h2 class="pattern-title">Dependency Injection Pattern</h2>
            <span class="pattern-category">Tüm Sınıflarda</span>
            <p class="pattern-description">
                Bağımlılıkları dışarıdan enjekte ederek, sınıflar arası bağımlılığı azaltan kalıp.
            </p>
            <div class="pattern-locations">
                <h4>Kullanıldığı Yerler:</h4>
                <ul>
                    <li>Program.cs</li>
                    <li>Startup.cs</li>
                    <li>Tüm Controller'ların constructor'ları</li>
                </ul>
            </div>
        </div>

        <div class="pattern-card">
            <h2 class="pattern-title">Repository Pattern</h2>
            <span class="pattern-category">Veritabanı İşlemleri</span>
            <p class="pattern-description">
                Veri erişim katmanını soyutlayarak, veritabanı işlemlerini merkezi bir noktadan yöneten kalıp.
            </p>
            <div class="pattern-locations">
                <h4>Kullanıldığı Yerler:</h4>
                <ul>
                    <li>Repositories/UserRepository.cs</li>
                    <li>Repositories/ProductRepository.cs</li>
                    <li>Repositories/OrderRepository.cs</li>
                </ul>
            </div>
        </div>

        <div class="pattern-card">
            <h2 class="pattern-title">Unit of Work Pattern</h2>
            <span class="pattern-category">Transaction Yönetimi</span>
            <p class="pattern-description">
                Veritabanı işlemlerini tek bir transaction içinde yöneterek veri tutarlılığını sağlayan kalıp.
            </p>
            <div class="pattern-locations">
                <h4>Kullanıldığı Yerler:</h4>
                <ul>
                    <li>UnitOfWork.cs</li>
                    <li>IUnitOfWork.cs</li>
                    <li>DatabaseContext.cs</li>
                </ul>
            </div>
        </div>

        <div class="pattern-card">
            <h2 class="pattern-title">Singleton Pattern</h2>
            <span class="pattern-category">Global Örnek</span>
            <p class="pattern-description">
                Bir sınıfın tek bir örneğinin olmasını sağlayan ve bu örneğe global erişim noktası sağlayan kalıp.
            </p>
            <div class="pattern-locations">
                <h4>Kullanıldığı Yerler:</h4>
                <ul>
                    <li>AuthenticationManager.cs</li>
                    <li>DbContext.cs</li>
                    <li>Logger.cs</li>
                </ul>
            </div>
        </div>

        <div class="pattern-card">
            <h2 class="pattern-title">Factory Pattern</h2>
            <span class="pattern-category">Nesne Oluşturma</span>
            <p class="pattern-description">
                Nesne oluşturma işlemini alt sınıflara devrederek, esnek nesne oluşturma imkanı sağlayan kalıp.
            </p>
            <div class="pattern-locations">
                <h4>Kullanıldığı Yerler:</h4>
                <ul>
                    <li>ServiceCollectionExtensions.cs</li>
                    <li>DbContextFactory.cs</li>
                    <li>PaymentFactory.cs</li>
                </ul>
            </div>
        </div>

        <div class="pattern-card">
            <h2 class="pattern-title">Observer Pattern</h2>
            <span class="pattern-category">Bildirim Yönetimi</span>
            <p class="pattern-description">
                Nesneler arasında one-to-many ilişkisi tanımlayarak, otomatik güncelleme sağlayan kalıp.
            </p>
            <div class="pattern-locations">
                <h4>Kullanıldığı Yerler:</h4>
                <ul>
                    <li>Hubs/NotificationHub.cs</li>
                    <li>Services/EventHandlers/OrderEventHandler.cs</li>
                    <li>Services/EventHandlers/UserEventHandler.cs</li>
                </ul>
            </div>
        </div>

        <div class="pattern-card">
            <h2 class="pattern-title">Strategy Pattern</h2>
            <span class="pattern-category">Algoritma Yönetimi</span>
            <p class="pattern-description">
                Algoritmaları değiştirilebilir hale getirerek, runtime'da strateji değişimine izin veren kalıp.
            </p>
            <div class="pattern-locations">
                <h4>Kullanıldığı Yerler:</h4>
                <ul>
                    <li>Services/Authentication/JwtAuthStrategy.cs</li>
                    <li>Services/Authentication/OAuth2Strategy.cs</li>
                    <li>Services/Payment/PaymentStrategy.cs</li>
                </ul>
            </div>
        </div>

        <div class="pattern-card">
            <h2 class="pattern-title">Decorator Pattern</h2>
            <span class="pattern-category">Dinamik Davranış</span>
            <p class="pattern-description">
                Nesnelere dinamik olarak yeni davranışlar ekleyen kalıp.
            </p>
            <div class="pattern-locations">
                <h4>Kullanıldığı Yerler:</h4>
                <ul>
                    <li>LoggingDecorator.cs</li>
                    <li>CachingDecorator.cs</li>
                    <li>AuthorizationDecorator.cs</li>
                </ul>
            </div>
        </div>

        <div class="pattern-card">
            <h2 class="pattern-title">Command Pattern</h2>
            <span class="pattern-category">İstek Yönetimi</span>
            <p class="pattern-description">
                İstekleri nesneler olarak kapsülleyerek, işlemleri sıraya koyma ve geri alma imkanı sağlayan kalıp.
            </p>
            <div class="pattern-locations">
                <h4>Kullanıldığı Yerler:</h4>
                <ul>
                    <li>Commands/CreateOrderCommand.cs</li>
                    <li>Commands/UpdateUserCommand.cs</li>
                    <li>Commands/DeleteProductCommand.cs</li>
                </ul>
            </div>
        </div>

        <div class="pattern-card">
            <h2 class="pattern-title">Mediator Pattern</h2>
            <span class="pattern-category">İletişim Yönetimi</span>
            <p class="pattern-description">
                Nesneler arası iletişimi merkezi bir noktadan yöneterek, bağımlılıkları azaltan kalıp.
            </p>
            <div class="pattern-locations">
                <h4>Kullanıldığı Yerler:</h4>
                <ul>
                    <li>MediatR/Handlers/OrderHandler.cs</li>
                    <li>MediatR/Handlers/UserHandler.cs</li>
                    <li>Services/Communication/MessageBroker.cs</li>
                </ul>
            </div>
        </div>

        <!-- Other patterns can continue here in the same structure -->
    </div>
</body>
</html>
