SELECT name FROM `person` 
        INNER JOIN worker ON worker.id_worker=person.id_person
        INNER JOIN worker_type ON worker.id_worker=worker_type.id_worker
        INNER JOIN type ON worker_type.id_type=type.id_type
        WHERE type.id_type = 1 OR 2 OR 3

        SELECT name FROM `person` 
        INNER JOIN worker ON worker.id_worker=person.id_person
        INNER JOIN worker_type ON worker.id_worker=worker_type.id_worker
        INNER JOIN type ON worker_type.id_type=type.id_type