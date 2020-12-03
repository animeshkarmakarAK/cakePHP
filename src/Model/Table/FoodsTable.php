<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Foods Model
 *
 * @method \App\Model\Entity\Food newEmptyEntity()
 * @method \App\Model\Entity\Food newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Food[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Food get($primaryKey, $options = [])
 * @method \App\Model\Entity\Food findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Food patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Food[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Food|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Food saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Food[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Food[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Food[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Food[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FoodsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('foods');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('picture')
            ->maxLength('picture', 255)
            ->requirePresence('picture', 'create')
            ->notEmptyString('picture');

        $validator
            ->scalar('made_by')
            ->maxLength('made_by', 20)
            ->requirePresence('made_by', 'create')
            ->notEmptyString('made_by');

        $validator
            ->integer('rating')
            ->requirePresence('rating', 'create')
            ->notEmptyString('rating');

        return $validator;
    }
}
