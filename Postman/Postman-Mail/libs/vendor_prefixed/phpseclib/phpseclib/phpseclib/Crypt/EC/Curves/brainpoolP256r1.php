<?php

/**
 * brainpoolP256r1
 *
 * PHP version 5 and 7
 *
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2017 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://pear.php.net/package/Math_BigInteger
 */
namespace PostSMTP\Vendor\phpseclib3\Crypt\EC\Curves;

use PostSMTP\Vendor\phpseclib3\Crypt\EC\BaseCurves\Prime;
use PostSMTP\Vendor\phpseclib3\Math\BigInteger;
class brainpoolP256r1 extends \PostSMTP\Vendor\phpseclib3\Crypt\EC\BaseCurves\Prime {

	public function __construct() {
		$this->setModulo( new \PostSMTP\Vendor\phpseclib3\Math\BigInteger( 'A9FB57DBA1EEA9BC3E660A909D838D726E3BF623D52620282013481D1F6E5377', 16 ) );
		$this->setCoefficients( new \PostSMTP\Vendor\phpseclib3\Math\BigInteger( '7D5A0975FC2C3057EEF67530417AFFE7FB8055C126DC5C6CE94A4B44F330B5D9', 16 ), new \PostSMTP\Vendor\phpseclib3\Math\BigInteger( '26DC5C6CE94A4B44F330B5D9BBD77CBF958416295CF7E1CE6BCCDC18FF8C07B6', 16 ) );
		$this->setBasePoint( new \PostSMTP\Vendor\phpseclib3\Math\BigInteger( '8BD2AEB9CB7E57CB2C4B482FFC81B7AFB9DE27E1E3BD23C23A4453BD9ACE3262', 16 ), new \PostSMTP\Vendor\phpseclib3\Math\BigInteger( '547EF835C3DAC4FD97F8461A14611DC9C27745132DED8E545C1D54C72F046997', 16 ) );
		$this->setOrder( new \PostSMTP\Vendor\phpseclib3\Math\BigInteger( 'A9FB57DBA1EEA9BC3E660A909D838D718C397AA3B561A6F7901E0E82974856A7', 16 ) );
	}
}
