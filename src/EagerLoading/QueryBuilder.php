<?php

declare(strict_types=1);

namespace Sb\Framework\Mvc\Model\EagerLoading;

use Phalcon\Mvc\Model\Query\Builder;

final class QueryBuilder extends Builder {
	const E_NOT_ALLOWED_METHOD_CALL = 'When eager loading relations queries must return full entities';
	
	public function distinct($distinct) {
		throw new \LogicException(static::E_NOT_ALLOWED_METHOD_CALL);
	}

	public function columns($columns) {
		throw new \LogicException(static::E_NOT_ALLOWED_METHOD_CALL);
	}

    /*
    This causes a bug in phalcon 3+ but, as this was originally here, there may a reason for this.
    So I'm leaving it to remember that any bug related to query conditions may relate to this

	public function where($conditions, $bindParams = NULL, $bindTypes = NULL) {
		return $this->andWhere($conditions, $bindParams, $bindTypes);
	}
    */
}
