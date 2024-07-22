Pour assurer la sécurité de l'application Arcadia, nous avons implémenté plusieurs mécanismes de sécurité sur les formulaires, les composants front-end et back-end :

    Authentification :
        Nous avons mis en place un système d'authentification basé sur les sessions, permettant de vérifier l'identité des utilisateurs lorsqu'ils se connectent. Les utilisateurs doivent fournir des informations d'identification valides pour accéder aux fonctionnalités de l'application.

    Contrôle d'Accès :
        L'application utilise un système de rôles (e.g., ROLE_USER, ROLE_ADMIN, ROLE_VETERINARY) pour contrôler l'accès aux différentes parties de l'application. Les annotations comme denyAccessUnlessGranted sont utilisées dans les contrôleurs pour restreindre l'accès aux actions en fonction des rôles des utilisateurs, garantissant que seules les personnes autorisées peuvent effectuer certaines opérations.

    Hachage des Mots de Passe :
        Nous avons utilisé le UserPasswordHasherInterface de Symfony pour hacher les mots de passe des utilisateurs avant de les stocker dans la base de données. Cela garantit que même en cas de violation de la base de données, les mots de passe ne seront pas directement accessibles, ajoutant ainsi une couche de sécurité supplémentaire pour protéger les informations sensibles des utilisateurs.

Ces mécanismes combinés contribuent à renforcer la sécurité de l'application Arcadia, protégeant ainsi les données des utilisateurs et l'intégrité du système.
