<?php


namespace App\Game\Buildings;


use App\Models\Building;
use Tightenco\Parental\HasParent;

final class Treasury extends Building
{
    use HasParent;

    /**
     * {@inheritDoc}
     * @see Building::BUILDINGS_REQUIREMENTS
     */
    public const BUILDINGS_REQUIREMENTS = [MainBuilding::class => 10, WorldWonder::class => 0];

    /**
     * {@inheritDoc}
     * @see Building::BASE_CULTURE_POINTS
     */
    protected const BASE_CULTURE_POINTS = 7;

    /**
     * {@inheritDoc}
     * @see Building::BASE_POPULATION
     */
    protected const BASE_POPULATION = 4;

    /**
     * {@inheritDoc}
     * @see Building::BASE_NEEDED_RESOURCES
     */
    protected const BASE_NEEDED_RESOURCES = [2880, 2740, 2580, 990];

    /**
     * {@inheritDoc}
     * @see Building::BASE_NEEDED_TIME
     */
    protected const BASE_NEEDED_TIME = [9875, 1.16, 1875];

    /**
     * {@inheritDoc}
     * @see Building::getBonusAttribute()
     */
    public function getBonusAttribute(): bool
    {
        return $this->level >= 10;
    }
}
