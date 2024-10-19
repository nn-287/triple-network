<?php if (isset($component)) { $__componentOriginala7e3e3ab156e6fa1f86927d4765c5327 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala7e3e3ab156e6fa1f86927d4765c5327 = $attributes; } ?>
<?php $component = App\View\Components\Layouts\Base::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.base'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layouts\Base::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if(in_array(request()->route()->getName(),['static-sign-in', 'static-sign-up', 'register', 'login','password.forgot','reset-password'])): ?>
        
        <?php if(in_array(request()->route()->getName(),['static-sign-in', 'login','password.forgot','reset-password'])): ?>
        <main class="main-content  mt-0">
            <div class="page-header page-header-bg align-items-start min-vh-100">
                    <span class="mask bg-gradient-dark opacity-6"></span>
            <?php echo e($slot); ?>

            <?php if (isset($component)) { $__componentOriginal8a30ca90eadc21b45094c41188c8c9f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a30ca90eadc21b45094c41188c8c9f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footers.guest','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footers.guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a30ca90eadc21b45094c41188c8c9f3)): ?>
<?php $attributes = $__attributesOriginal8a30ca90eadc21b45094c41188c8c9f3; ?>
<?php unset($__attributesOriginal8a30ca90eadc21b45094c41188c8c9f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a30ca90eadc21b45094c41188c8c9f3)): ?>
<?php $component = $__componentOriginal8a30ca90eadc21b45094c41188c8c9f3; ?>
<?php unset($__componentOriginal8a30ca90eadc21b45094c41188c8c9f3); ?>
<?php endif; ?>
             </div>
        </main>
        <?php else: ?>
        <?php echo e($slot); ?>

        <?php endif; ?>

    <?php elseif(in_array(request()->route()->getName(),['rtl'])): ?>
    <?php echo e($slot); ?>

    <?php elseif(in_array(request()->route()->getName(),['virtual-reality'])): ?>
    <div class="virtual-reality">
        <?php if (isset($component)) { $__componentOriginal778d3beb0063990dd56df93abee65235 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal778d3beb0063990dd56df93abee65235 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbars.navs.auth','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbars.navs.auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal778d3beb0063990dd56df93abee65235)): ?>
<?php $attributes = $__attributesOriginal778d3beb0063990dd56df93abee65235; ?>
<?php unset($__attributesOriginal778d3beb0063990dd56df93abee65235); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal778d3beb0063990dd56df93abee65235)): ?>
<?php $component = $__componentOriginal778d3beb0063990dd56df93abee65235; ?>
<?php unset($__componentOriginal778d3beb0063990dd56df93abee65235); ?>
<?php endif; ?>
        <div class="border-radius-xl mx-2 mx-md-3 position-relative"
            style="background-image: url('<?php echo e(asset('assets')); ?>/img/vr-bg.jpg'); background-size: cover;">
            <?php if (isset($component)) { $__componentOriginaleeb4de73933bf6c97cffe74e5846276e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleeb4de73933bf6c97cffe74e5846276e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbars.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbars.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleeb4de73933bf6c97cffe74e5846276e)): ?>
<?php $attributes = $__attributesOriginaleeb4de73933bf6c97cffe74e5846276e; ?>
<?php unset($__attributesOriginaleeb4de73933bf6c97cffe74e5846276e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleeb4de73933bf6c97cffe74e5846276e)): ?>
<?php $component = $__componentOriginaleeb4de73933bf6c97cffe74e5846276e; ?>
<?php unset($__componentOriginaleeb4de73933bf6c97cffe74e5846276e); ?>
<?php endif; ?>
            <main class="main-content border-radius-lg h-100">
                <?php echo e($slot); ?>


        </div>
        <?php if (isset($component)) { $__componentOriginalf30276552b63aa6c9559a1667ce359f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf30276552b63aa6c9559a1667ce359f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footers.auth','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footers.auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf30276552b63aa6c9559a1667ce359f9)): ?>
<?php $attributes = $__attributesOriginalf30276552b63aa6c9559a1667ce359f9; ?>
<?php unset($__attributesOriginalf30276552b63aa6c9559a1667ce359f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf30276552b63aa6c9559a1667ce359f9)): ?>
<?php $component = $__componentOriginalf30276552b63aa6c9559a1667ce359f9; ?>
<?php unset($__componentOriginalf30276552b63aa6c9559a1667ce359f9); ?>
<?php endif; ?>
        </main>
        <?php if (isset($component)) { $__componentOriginal68b5b6b5278ad5d9ad739656255d7f69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68b5b6b5278ad5d9ad739656255d7f69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.plugins','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('plugins'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68b5b6b5278ad5d9ad739656255d7f69)): ?>
<?php $attributes = $__attributesOriginal68b5b6b5278ad5d9ad739656255d7f69; ?>
<?php unset($__attributesOriginal68b5b6b5278ad5d9ad739656255d7f69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68b5b6b5278ad5d9ad739656255d7f69)): ?>
<?php $component = $__componentOriginal68b5b6b5278ad5d9ad739656255d7f69; ?>
<?php unset($__componentOriginal68b5b6b5278ad5d9ad739656255d7f69); ?>
<?php endif; ?>
    </div>
    <?php else: ?>
    <?php if (isset($component)) { $__componentOriginaleeb4de73933bf6c97cffe74e5846276e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleeb4de73933bf6c97cffe74e5846276e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbars.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbars.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleeb4de73933bf6c97cffe74e5846276e)): ?>
<?php $attributes = $__attributesOriginaleeb4de73933bf6c97cffe74e5846276e; ?>
<?php unset($__attributesOriginaleeb4de73933bf6c97cffe74e5846276e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleeb4de73933bf6c97cffe74e5846276e)): ?>
<?php $component = $__componentOriginaleeb4de73933bf6c97cffe74e5846276e; ?>
<?php unset($__componentOriginaleeb4de73933bf6c97cffe74e5846276e); ?>
<?php endif; ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php if (isset($component)) { $__componentOriginal778d3beb0063990dd56df93abee65235 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal778d3beb0063990dd56df93abee65235 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbars.navs.auth','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbars.navs.auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal778d3beb0063990dd56df93abee65235)): ?>
<?php $attributes = $__attributesOriginal778d3beb0063990dd56df93abee65235; ?>
<?php unset($__attributesOriginal778d3beb0063990dd56df93abee65235); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal778d3beb0063990dd56df93abee65235)): ?>
<?php $component = $__componentOriginal778d3beb0063990dd56df93abee65235; ?>
<?php unset($__componentOriginal778d3beb0063990dd56df93abee65235); ?>
<?php endif; ?>

        <?php echo e($slot); ?>


        <!-- <?php if (isset($component)) { $__componentOriginalf30276552b63aa6c9559a1667ce359f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf30276552b63aa6c9559a1667ce359f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footers.auth','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footers.auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf30276552b63aa6c9559a1667ce359f9)): ?>
<?php $attributes = $__attributesOriginalf30276552b63aa6c9559a1667ce359f9; ?>
<?php unset($__attributesOriginalf30276552b63aa6c9559a1667ce359f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf30276552b63aa6c9559a1667ce359f9)): ?>
<?php $component = $__componentOriginalf30276552b63aa6c9559a1667ce359f9; ?>
<?php unset($__componentOriginalf30276552b63aa6c9559a1667ce359f9); ?>
<?php endif; ?> -->
    </main>
    <?php if (isset($component)) { $__componentOriginal68b5b6b5278ad5d9ad739656255d7f69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68b5b6b5278ad5d9ad739656255d7f69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.plugins','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('plugins'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68b5b6b5278ad5d9ad739656255d7f69)): ?>
<?php $attributes = $__attributesOriginal68b5b6b5278ad5d9ad739656255d7f69; ?>
<?php unset($__attributesOriginal68b5b6b5278ad5d9ad739656255d7f69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68b5b6b5278ad5d9ad739656255d7f69)): ?>
<?php $component = $__componentOriginal68b5b6b5278ad5d9ad739656255d7f69; ?>
<?php unset($__componentOriginal68b5b6b5278ad5d9ad739656255d7f69); ?>
<?php endif; ?>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala7e3e3ab156e6fa1f86927d4765c5327)): ?>
<?php $attributes = $__attributesOriginala7e3e3ab156e6fa1f86927d4765c5327; ?>
<?php unset($__attributesOriginala7e3e3ab156e6fa1f86927d4765c5327); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala7e3e3ab156e6fa1f86927d4765c5327)): ?>
<?php $component = $__componentOriginala7e3e3ab156e6fa1f86927d4765c5327; ?>
<?php unset($__componentOriginala7e3e3ab156e6fa1f86927d4765c5327); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\triple-network\resources\views/layouts/app.blade.php ENDPATH**/ ?>