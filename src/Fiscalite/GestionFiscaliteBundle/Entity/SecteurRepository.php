<?php

namespace Fiscalite\GestionFiscaliteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SecteurRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SecteurRepository extends EntityRepository {

    public function findSecteur($nom, $nombreIndividu, $adresses) {
        $qb = $this->createQueryBuilder('s');
        if ($nom != NULL) {
            $qb->andWhere('s.nom LIKE :nom')
                    ->setParameter('nom', '%' . $nom . '%');
        }
        if ($nombreIndividu != NULL) {
            $qb->andWhere('s.nombreIndividu =:nombreIndividu')
                    ->setParameter('nombreIndividu', $nombreIndividu);
        }
        if ($adresses != NULL) {
            $j = 0;
            foreach ($adresses as $adresse) {
                $qb->leftJoin('s.typerue', 'st' . $j)
                        ->andWhere('st' . $j . '.libelle LIKE :libelle')
                        ->setParameter('libelle', '%' .$adresse. '%');
                $j++;
            }
        }

        $qb->orderBy('s.nom', 'ASC');
        return $qb->getQuery()->getResult();
    }

}
