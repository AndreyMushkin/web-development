CREATE DATABASE university;
USE university;
CREATE TABLE `student`
(
    `student_id` INT AUTO_INCREMENT NOT NULL,
    `group_id` INT NOT NULL,
    `surname` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `age` INT NOT NULL,
    PRIMARY KEY (student_id)
);
CREATE TABLE `faculty`
(
    `faculty_id` INT AUTO_INCREMENT NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (faculty_id)
);
CREATE TABLE `groups`
(
    `group_id` INT AUTO_INCREMENT NOT NULL,
    `faculty_id` INT NOT NULL,
    PRIMARY KEY (group_id)
);
INSERT INTO faculty SET name = 'FIIVT';
INSERT INTO faculty SET name = 'IMM';
INSERT INTO faculty SET name = 'RTF';
INSERT INTO groups SET faculty_id = '1';
INSERT INTO groups SET faculty_id = '1';
INSERT INTO groups SET faculty_id = '1';
INSERT INTO groups SET faculty_id = '2';
INSERT INTO groups SET faculty_id = '2';
INSERT INTO groups SET faculty_id = '2';
INSERT INTO groups SET faculty_id = '3';
INSERT INTO groups SET faculty_id = '3';
INSERT INTO groups SET faculty_id = '3';
INSERT INTO student SET surname = 'Ivanov', name = 'Artem', age = '19', group_id = 1;
INSERT INTO student SET surname = 'Lebedev', name = 'Nikolay', age = '18', group_id = 1;
INSERT INTO student SET surname = 'Pavlov', name = 'Denis', age = '18', group_id = 1;
INSERT INTO student SET surname = 'Smetanov', name = 'Ivan', age = '19', group_id = 1;
INSERT INTO student SET surname = 'Chelov', name = 'Petr', age = '20', group_id = 1;
INSERT INTO student SET surname = 'Kalinin', name = 'Maksim', age = '18', group_id = 2;
INSERT INTO student SET surname = 'Karev', name = 'Ilya', age = '19', group_id = 2;
INSERT INTO student SET surname = 'Karpov', name = 'Paul', age = '19', group_id = 2;
INSERT INTO student SET surname = 'Trockiy', name = 'Vasiliy', age = '20', group_id = 2;
INSERT INTO student SET surname = 'Leukhin', name = 'Maksim', age = '18', group_id = 2;
INSERT INTO student SET surname = 'Tatyanina', name = 'Mariya', age = '21', group_id = 3;
INSERT INTO student SET surname = 'Zarubin', name = 'Aleksey', age = '17', group_id = 3;
INSERT INTO student SET surname = 'Modin', name = 'Gleb', age = '19', group_id = 3;
INSERT INTO student SET surname = 'Neznaykin', name = 'Saveliy', age = '18', group_id = 3;
INSERT INTO student SET surname = 'Umnikov', name = 'Yaroslav', age = '18', group_id = 3;
INSERT INTO student SET surname = 'Sibirskikh', name = 'Mikhail', age = '17', group_id = 4;
INSERT INTO student SET surname = 'Podyganova', name = 'Anastatiya', age = '18', group_id = 4;
INSERT INTO student SET surname = 'Smirnov', name = 'Ivan', age = '19', group_id = 4;
INSERT INTO student SET surname = 'Zabolotskiy', name = 'Sergey', age = '20', group_id = 4;
INSERT INTO student SET surname = 'Treushkov', name = 'Aleksandr', age = '20', group_id = 4;
INSERT INTO student SET surname = 'Savelyev', name = 'Artem', age = '19', group_id = 5;
INSERT INTO student SET surname = 'Utkin', name = 'Aleksey', age = '18', group_id = 5;
INSERT INTO student SET surname = 'Maslova', name = 'Svetlana', age = '18', group_id = 5;
INSERT INTO student SET surname = 'Bobrov', name = 'Boris', age = '17', group_id = 5;
INSERT INTO student SET surname = 'Naumov', name = 'Igor', age = '19', group_id = 5;
INSERT INTO student SET surname = 'Veresnikov', name = 'Kirill', age = '20', group_id = 6;
INSERT INTO student SET surname = 'Rubin', name = 'Timofey', age = '22', group_id = 6;
INSERT INTO student SET surname = 'Raskalov', name = 'Konstantin', age = '21', group_id = 6;
INSERT INTO student SET surname = 'Samopalov', name = 'Aleksandr', age = '17', group_id = 6;
INSERT INTO student SET surname = 'Sizykh', name = 'Artem', age = '18', group_id = 6;
INSERT INTO student SET surname = 'Nikitin', name = 'Maksim', age = '19', group_id = 7;
INSERT INTO student SET surname = 'Faustin', name = 'Mikhail', age = '20', group_id = 7;
INSERT INTO student SET surname = 'Teremnyakova', name = 'Nadejda', age = '21', group_id = 7;
INSERT INTO student SET surname = 'Sherbakova', name = 'Margarita', age = '20', group_id = 7;
INSERT INTO student SET surname = 'Veselov', name = 'Petr', age = '19', group_id = 7;
INSERT INTO student SET surname = 'Ermakova', name = 'Irina', age = '19', group_id = 8;
INSERT INTO student SET surname = 'Baranov', name = 'Nikita', age = '18', group_id = 8;
INSERT INTO student SET surname = 'Semenova', name = 'Darya', age = '17', group_id = 8;
INSERT INTO student SET surname = 'Faroshin', name = 'Vasiliy', age = '19', group_id = 8;
INSERT INTO student SET surname = 'Veselov', name = 'Sergey', age = '20', group_id = 8;
INSERT INTO student SET surname = 'Telemanov', name = 'Trofim', age = '21', group_id = 9;
INSERT INTO student SET surname = 'Kiseleva', name = 'Anastatiya', age = '17', group_id = 9;
INSERT INTO student SET surname = 'Gorbachev', name = 'Yaroslav', age = '18', group_id = 9;
INSERT INTO student SET surname = 'Usmanova', name = 'Venera', age = '19', group_id = 9;
INSERT INTO student SET surname = 'Kopatov', name = 'Andrey', age = '19', group_id = 9;
