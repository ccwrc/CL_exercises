<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PupilRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PupilRepository extends EntityRepository {

    public function getAllPupilsWithoutClass() {
        $em = $this->getEntityManager();
        $query = $em->createQuery("
               SELECT p FROM AppBundle:Pupil p WHERE p.classroom is NULL");
        // $pupils = $query->getResult(); return pupils zmienione na krotszy zapis
        return $query->getResult();
    }

    public function getAllPupilsWithAgeBetween($minAge, $maxAge) {
        $em = $this->getEntityManager();
        $query = $em->createQuery("
               SELECT p FROM AppBundle:Pupil p WHERE p.age < :max AND p.age > :min");
        $query->setParameter("max", $maxAge); //bindowanie
        $query->setParameter("min", $minAge);

        //$pupils = $query->getResult();
        return $query->getResult();
    }

}
