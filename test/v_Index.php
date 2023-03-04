SELECT name_skill FROM class
        INNER JOIN skill ON skill.id_skill=class.id_skill
        INNER JOIN worker ON worker.id_worker=class.id_worker
        INNER JOIN person ON person.id_person=worker.id_person;