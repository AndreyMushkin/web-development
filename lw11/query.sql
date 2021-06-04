SELECT * 
FROM 
    student 
WHERE 
    age = '19';
#--------------------------------------
SELECT * 
FROM 
    student
WHERE
    group_id = '2';
#--------------------------------------
SELECT * 
FROM 
    faculty
WHERE
    faculty_id = '3';
#--------------------------------------
SELECT
    f.faculty_id,
    s.group_id,
    s.surname,
    s.name,
    s.age
FROM
    student s
JOIN
    groups g
    ON
        g.group_id = s.group_id
    JOIN
        faculty f
        ON
            g.faculty_id = f.faculty_id
        WHERE
            f.faculty_id = '1';
#--------------------------------------
SELECT
    s.student_id,
    s.group_id,
    s.surname,
    s.name,
    s.age,
    f.faculty_id,
    f.name
FROM
    student s
JOIN
    groups g
    ON
        s.group_id = g.group_id
    JOIN
        faculty f
        ON
            f.faculty_id = g.faculty_id
        WHERE
            s.student_id = '25';