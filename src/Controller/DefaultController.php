<?php

namespace App\Controller;

use App\Model\TimeSlot;
use App\Model\TimeSlots;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class DefaultController
{
    /**
     * @Route(path="/")
     *
     * @param \Symfony\Component\Serializer\SerializerInterface $serializer
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function defaultAction(SerializerInterface $serializer): JsonResponse
    {
        $timeSlots = new TimeSlots();
        $timeSlot = new TimeSlot();

        $timeSlots->append($timeSlot);

        $timeSlot->getStartTime()->setHour("00");
        $timeSlot->getStartTime()->setMinute("00");
        $timeSlot->getEndTime()->setHour("01");
        $timeSlot->getEndTime()->setMinute("00");

        return new JsonResponse($serializer->serialize($timeSlots, 'json'), 200, [], true);
    }
}
