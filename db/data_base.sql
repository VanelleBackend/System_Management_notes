-- =====================================
-- Base de données : gestion_notes
-- =====================================
CREATE DATABASE IF NOT EXISTS gestion_notes;
USE gestion_notes;

-- =====================================
-- Table utilisateurs
-- =====================================
CREATE TABLE utilisateurs (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','enseignant','eleve') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =====================================
-- Table classes
-- =====================================
CREATE TABLE classes (
    id_classe INT AUTO_INCREMENT PRIMARY KEY,
    nom_classe VARCHAR(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =====================================
-- Table matieres
-- =====================================
CREATE TABLE matieres (
    id_matiere INT AUTO_INCREMENT PRIMARY KEY,
    nom_matiere VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =====================================
-- Table eleves
-- =====================================
CREATE TABLE eleves (
    id_user INT PRIMARY KEY,
    id_classe INT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES utilisateurs(id_user) ON DELETE CASCADE,
    FOREIGN KEY (id_classe) REFERENCES classes(id_classe) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =====================================
-- Table enseignants
-- =====================================
CREATE TABLE enseignants (
    id_user INT PRIMARY KEY,
    FOREIGN KEY (id_user) REFERENCES utilisateurs(id_user) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =====================================
-- Table pivot enseignant_classe_matiere
-- =====================================
CREATE TABLE enseignant_classe_matiere (
    id_user INT NOT NULL,
    id_classe INT NOT NULL,
    id_matiere INT NOT NULL,
    PRIMARY KEY (id_user, id_classe, id_matiere),
    FOREIGN KEY (id_user) REFERENCES enseignants(id_user) ON DELETE CASCADE,
    FOREIGN KEY (id_classe) REFERENCES classes(id_classe) ON DELETE CASCADE,
    FOREIGN KEY (id_matiere) REFERENCES matieres(id_matiere) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- =====================================
-- Table notes
-- =====================================
CREATE TABLE notes (
    id_note INT AUTO_INCREMENT PRIMARY KEY,
    id_eleve INT NOT NULL,
    id_matiere INT NOT NULL,
    id_enseignant INT NOT NULL,
    valeur DECIMAL(5,2) NOT NULL,
    type_note ENUM('interro','ds','composition') NOT NULL,
    semestre TINYINT NOT NULL,
    FOREIGN KEY (id_eleve) REFERENCES eleves(id_user) ON DELETE CASCADE,
    FOREIGN KEY (id_matiere) REFERENCES matieres(id_matiere) ON DELETE CASCADE,
    FOREIGN KEY (id_enseignant) REFERENCES enseignants(id_user) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
