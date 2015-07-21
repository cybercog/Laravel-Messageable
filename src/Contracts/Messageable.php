<?php

namespace DraperStudio\Messageable\Contracts;

/**
 * Interface Messageable.
 */
interface Messageable
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function messages();

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function threads();

    /**
     * @return mixed
     */
    public function newMessagesCount();

    /**
     * @return mixed
     */
    public function threadsWithNewMessages();
}
