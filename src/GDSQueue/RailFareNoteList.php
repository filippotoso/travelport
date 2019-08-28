<?php

namespace FilippoToso\Travelport\GDSQueue;

class RailFareNoteList
{

    /**
     * @var RailFareNote $RailFareNote
     */
    protected $RailFareNote = null;

    /**
     * @param RailFareNote $RailFareNote
     */
    public function __construct($RailFareNote = null)
    {
      $this->RailFareNote = $RailFareNote;
    }

    /**
     * @return RailFareNote
     */
    public function getRailFareNote()
    {
      return $this->RailFareNote;
    }

    /**
     * @param RailFareNote $RailFareNote
     * @return \FilippoToso\Travelport\GDSQueue\RailFareNoteList
     */
    public function setRailFareNote($RailFareNote)
    {
      $this->RailFareNote = $RailFareNote;
      return $this;
    }

}
