<?php namespace App\Http\Traits;

trait Sortable {
	
	public function moveAfter($entity)
    {
        /** @var \Eloquent $this */
        $this->getConnection()->beginTransaction();

        if ($this->position > $entity->position) {

            $this->getConnection()->table($this->getTable())
                ->where('position', '>', $entity->position)
                ->where('position', '<', $this->position)
                ->increment('position');

            $this->position = $entity->position + 1;
        } else {
            if ($this->position < $entity->position) {

                $this->getConnection()->table($this->getTable())
                    ->where('position', '<=', $entity->position)
                    ->where('position', '>', $this->position)
                    ->decrement('position');

                $this->position = $entity->position;
                $entity->position = $entity->position - 1;
            }
        }

        $this->save();

        $this->getConnection()->commit();
    }

    public function moveBefore($entity)
    {
        /** @var \Eloquent $this */
        $this->getConnection()->beginTransaction();

        if ($this->position > $entity->position) {
            $this->getConnection()->table($this->getTable())->where('position', '>=', $entity->position)->where(
                'position',
                '<',
                $this->position
            )->increment('position');
            $this->position = $entity->position;

            $entity->position = $entity->position + 1;
        } else {
            if ($this->position < $entity->position) {
                $this->getConnection()->table($this->getTable())->where('position', '<', $entity->position)->where(
                    'position',
                    '>',
                    $this->position
                )->decrement('position');
                $this->position = $entity->position - 1;
            }
        }

        $this->save();

        $this->getConnection()->commit();
    }

}