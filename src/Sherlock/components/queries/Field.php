<?php
/**
 * User: Zachary Tong
 * Date: 2013-02-16
 * Time: 09:24 PM
 * Auto-generated by "generate.php"
 * @package Sherlock\components\queries
 */
namespace Sherlock\components\queries;

use Sherlock\components;
use Sherlock\components\QueryInterface;

/**
 * Class Field
 * @package Sherlock\components\queries
 */
class Field extends QueryString implements QueryInterface
{
    /**
     * @param string $value
     *
     * @return $this
     */
    public function field($value)
    {
        $this->params['field'] = $value;
        return $this;
    }


    /**
     * @return array
     */
    public function toArray()
    {
        $this->params[$this->params['field']] = $this->convertParams(
            array(
                'query',
                'default_field',
                'boost',
                'enable_position_increments',
                'default_operator',
                'analyzer',
                'allow_leading_wildcard',
                'lowercase_expanded_terms',
                'fuzzy_min_sim',
                'fuzzy_prefix_length',
                'lenient',
                'phrase_slop',
                'analyze_wildcard',
                'auto_generate_phrase_queries',
                'quote_analyzer',
                'quote_field_suffix',
            )
        );

        $params = $this->convertParams(
            array(
                $this->params['field'],
                'rewrite',
            )
        );

        $ret = array('field' => $params);

        return $ret;

    }

}
