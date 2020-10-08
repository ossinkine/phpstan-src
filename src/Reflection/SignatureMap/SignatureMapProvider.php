<?php declare(strict_types = 1);

namespace PHPStan\Reflection\SignatureMap;

interface SignatureMapProvider
{

	public function hasMethodSignature(string $className, string $methodName, int $variant = 0): bool;

	public function hasFunctionSignature(string $name, int $variant = 0): bool;

	public function getMethodSignature(string $className, string $methodName, int $variant = 0): FunctionSignature;

	public function getFunctionSignature(string $functionName, ?string $className, int $variant = 0): FunctionSignature;

	public function hasMethodMetadata(string $className, string $methodName): bool;

	public function hasFunctionMetadata(string $name): bool;

	/**
	 * @param string $className
	 * @param string $methodName
	 * @return array{hasSideEffects: bool}
	 */
	public function getMethodMetadata(string $className, string $methodName): array;

	/**
	 * @param string $functionName
	 * @return array{hasSideEffects: bool}
	 */
	public function getFunctionMetadata(string $functionName): array;

}
